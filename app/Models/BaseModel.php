<?php

namespace App\Models;

use CodeIgniter\Model;

class BaseModel extends Model
{
    protected $selectColumn;

    public function search($search)
    {
        if (!empty($search)) {
            foreach ($search as $k => $v) {
                if (is_array($v)) {
                    $this->where($k.' between '.$v['start'].' and '.$v['end']);
                } else {
                    $hasLikeExpression = $this->getLikeExpression($v);
                    if (!is_null($hasLikeExpression)) {
                        $this->like($k, $v, $hasLikeExpression);
                    } else {
                        $this->where($k, $v);
                    }
                }
            }
        }

        return $this;
    }

    /**
     * Inserts data into the current table. If an object is provided,
     * it will attempt to convert it to an array.
     *
     * @param array|object $data
     * @param bool         $returnID whether insert ID should be returned or not
     *
     * @throws \ReflectionException
     *
     * @return BaseResult|false|int|string
     */
    public function insert($data = null, bool $returnID = true)
    {
        $this->setValidationRulesCreated();

        return parent::insert($data, $returnID);
    }

    /**
     * Updates a single record in $this->table. If an object is provided,
     * it will attempt to convert it into an array.
     *
     * @param array|int|string $id
     * @param array|object     $data
     *
     * @throws \ReflectionException
     */
    public function update($id = null, $data = null): bool
    {
        $this->setValidationRulesUpdated($data);

        return parent::update($id, $data);
    }

    /**
     * Get the value of selectColumn.
     */
    public function getSelectColumn()
    {
        return $this->selectColumn;
    }

    /**
     * Set the value of selectColumn.
     *
     * @param mixed $selectColumn
     *
     * @return self
     */
    public function setSelectColumn($selectColumn)
    {
        $this->selectColumn = $selectColumn;

        return $this;
    }
    
    protected function builder(string $table = null)
    {
        $builder = parent::builder($table);
        if ($this->getSelectColumn()) {
            $builder->select($this->getSelectColumn());
        }

        return $builder;
    }

    protected function setValidationRulesCreated()
    {
        $exceptColumn = [$this->primaryKey];
        if ($this->useTimestamps && !empty($this->createdField)) {
            array_push($exceptColumn, $this->createdField);
        }

        if ($this->useTimestamps && !empty($this->updatedField)) {
            array_push($exceptColumn, $this->updatedField);
        }
        $this->setValidationRules($this->getValidationRules(['except' => $exceptColumn]));
    }

    protected function setValidationRulesUpdated($data)
    {
        $this->setValidationRules($this->getValidationRules(['only' => array_keys($data)]));
    }

    private function getLikeExpression(string $value)
    {
        $position = 0;
        $firstCharacter = '%' == substr($value, 0, 1) ? 1 : 0;
        $endCharacter = '%' == substr($value, -1, 1) ? 2 : 0;
        $position = $position + $firstCharacter + $endCharacter;
        switch ($position) {
            case 1:
                return 'before';

                break;
            case 2:
                return 'after';

                break;
            case 3:
                return 'both';

                break;
            default:
                return null;
        }
    }
}
