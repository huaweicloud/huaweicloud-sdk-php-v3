<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTaskResultsDetailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTaskResultsDetailRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectUuid  项目id
    * taskUri  任务URI
    * resultUri  测试任务结果uri
    * pageNo  当前页数
    * pageSize  每页多少记录
    * result  结果过滤条件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectUuid' => 'string',
            'taskUri' => 'string',
            'resultUri' => 'string',
            'pageNo' => 'string',
            'pageSize' => 'string',
            'result' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectUuid  项目id
    * taskUri  任务URI
    * resultUri  测试任务结果uri
    * pageNo  当前页数
    * pageSize  每页多少记录
    * result  结果过滤条件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectUuid' => null,
        'taskUri' => null,
        'resultUri' => null,
        'pageNo' => null,
        'pageSize' => null,
        'result' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * projectUuid  项目id
    * taskUri  任务URI
    * resultUri  测试任务结果uri
    * pageNo  当前页数
    * pageSize  每页多少记录
    * result  结果过滤条件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectUuid' => 'project_uuid',
            'taskUri' => 'task_uri',
            'resultUri' => 'result_uri',
            'pageNo' => 'page_no',
            'pageSize' => 'page_size',
            'result' => 'result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectUuid  项目id
    * taskUri  任务URI
    * resultUri  测试任务结果uri
    * pageNo  当前页数
    * pageSize  每页多少记录
    * result  结果过滤条件
    *
    * @var string[]
    */
    protected static $setters = [
            'projectUuid' => 'setProjectUuid',
            'taskUri' => 'setTaskUri',
            'resultUri' => 'setResultUri',
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize',
            'result' => 'setResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectUuid  项目id
    * taskUri  任务URI
    * resultUri  测试任务结果uri
    * pageNo  当前页数
    * pageSize  每页多少记录
    * result  结果过滤条件
    *
    * @var string[]
    */
    protected static $getters = [
            'projectUuid' => 'getProjectUuid',
            'taskUri' => 'getTaskUri',
            'resultUri' => 'getResultUri',
            'pageNo' => 'getPageNo',
            'pageSize' => 'getPageSize',
            'result' => 'getResult'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['taskUri'] = isset($data['taskUri']) ? $data['taskUri'] : null;
        $this->container['resultUri'] = isset($data['resultUri']) ? $data['resultUri'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectUuid'] === null) {
            $invalidProperties[] = "'projectUuid' can't be null";
        }
        if ($this->container['taskUri'] === null) {
            $invalidProperties[] = "'taskUri' can't be null";
        }
        if ($this->container['resultUri'] === null) {
            $invalidProperties[] = "'resultUri' can't be null";
        }
        if ($this->container['pageNo'] === null) {
            $invalidProperties[] = "'pageNo' can't be null";
        }
        if ($this->container['pageSize'] === null) {
            $invalidProperties[] = "'pageSize' can't be null";
        }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets projectUuid
    *  项目id
    *
    * @return string
    */
    public function getProjectUuid()
    {
        return $this->container['projectUuid'];
    }

    /**
    * Sets projectUuid
    *
    * @param string $projectUuid 项目id
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
        return $this;
    }

    /**
    * Gets taskUri
    *  任务URI
    *
    * @return string
    */
    public function getTaskUri()
    {
        return $this->container['taskUri'];
    }

    /**
    * Sets taskUri
    *
    * @param string $taskUri 任务URI
    *
    * @return $this
    */
    public function setTaskUri($taskUri)
    {
        $this->container['taskUri'] = $taskUri;
        return $this;
    }

    /**
    * Gets resultUri
    *  测试任务结果uri
    *
    * @return string
    */
    public function getResultUri()
    {
        return $this->container['resultUri'];
    }

    /**
    * Sets resultUri
    *
    * @param string $resultUri 测试任务结果uri
    *
    * @return $this
    */
    public function setResultUri($resultUri)
    {
        $this->container['resultUri'] = $resultUri;
        return $this;
    }

    /**
    * Gets pageNo
    *  当前页数
    *
    * @return string
    */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
    * Sets pageNo
    *
    * @param string $pageNo 当前页数
    *
    * @return $this
    */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页多少记录
    *
    * @return string
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param string $pageSize 每页多少记录
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets result
    *  结果过滤条件
    *
    * @return string|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string|null $result 结果过滤条件
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

