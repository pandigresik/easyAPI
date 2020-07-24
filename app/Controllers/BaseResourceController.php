<?php
namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */


use CodeIgniter\RESTful\ResourceController;

class BaseResourceController extends ResourceController
{
	/**
	 * @license Apache 2.0
	 */

	/**
	 * @OA\Info(
	 *     description="This is a sample Opensid server.  You can find
out more about Swagger at
[http://swagger.io](http://swagger.io) or on
[irc.freenode.net, #swagger](http://swagger.io/irc/).",
	 *     version="1.0.0",
	 *     title="Swagger Opensid",
	 *     termsOfService="http://swagger.io/terms/",
	 *     @OA\Contact(
	 *         email="apiteam@swagger.io"
	 *     ),
	 *     @OA\License(
	 *         name="Apache 2.0",
	 *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
	 *     )
	 * )
	 */
	/**	 
	 * @OA\Server(
	 *     description="SwaggerHUB API Mocking",
	 *     url="http://localhost:8080"
	 * )
	 */

	/**	 
	 * @OA\SecurityScheme(
	 *     type="http",	 
	 *     securityScheme="bearer_auth",
	 *     name="bearer_auth",
	 * 	   scheme="bearer",	
	 * 	   bearerFormat="JWT"	
	 * )
	 */	

	/**
	 *
	 * @var string Name of the model class managing this resource's data
	 */
	protected $modelName;

	/**
	 *
	 * @var int limit data to show
	 */
	protected $limit = 10;
	

	/**
	 * Return an array of resource objects, themselves in array format
	 *
	 * @return array	an array
	 */
	public function index()
	{
		$search = $this->request->getGet('search');
		$page = $this->request->getGet('page') ?? 1;
		$limit = $this->request->getGet('limit') ?? $this->limit;				
		$data = $this->model->search($search)->paginate($limit, 'default', $page);
		$pagination = [
			'currentPage' => $this->model->pager->getCurrentPage(),
			'totalPage' => $this->model->pager->getPageCount(),
		];				
		return $this->respond(['data' => $data, 'pagination' => $pagination]);
	}

	/**
	 * Return the properties of a resource object
	 *
	 * @return array	an array
	 */
	public function show($id = null)
	{
		$record = $this->model->find($id);
		if (!$record) {
			return $this->failNotFound(sprintf(
				'item with id %d not found',
				$id
			));
		}

		return $this->respond($record);
	}

	/**
	 * Return a new resource object, with default properties
	 *
	 * @return array	an array
	 */
	public function new()
	{
		//return $this->fail(lang('RESTful.notImplemented', ['new']), 501);
	}

	/**
	 * Create a new resource object, from "posted" parameters
	 *
	 * @return array	an array
	 */
	public function create()
	{
		$data = $this->request->getPost();
		if (!$this->model->insert($data)) {
			return $this->fail($this->model->errors());
		}

		return $this->respondCreated($data, 'product created');
	}

	/**
	 * Return the editable properties of a resource object
	 *
	 * @return array	an array
	 */
	public function edit($id = null)
	{
		return $this->show($id);
	}

	/**
	 * Add or update a model resource, from "posted" properties
	 *
	 * @return array	an array
	 */
	public function update($id = null)
	{
		$data       = $this->request->getRawInput();		
		$updateData = array_filter($data);
		$updateData[$this->model->primaryKey] = $id;		
		if (!$this->model->save($updateData)) {
			return $this->fail($this->model->errors());
		}

		return $this->respond($data, 200, 'data updated');
	}

	/**
	 * Delete the designated resource object from the model
	 *
	 * @return array	an array
	 */
	public function delete($id = null)
	{
		$delete = $this->model->delete($id);
		if ($this->model->db->affectedRows() === 0) {
			return $this->failNotFound(sprintf(
				'item with id %d not found or already deleted',
				$id
			));
		}

		return $this->respondDeleted(['id' => $id], 'data deleted');
	}	
}
