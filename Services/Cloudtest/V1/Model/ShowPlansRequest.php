<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPlansRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPlansRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目id，项目唯一标识，固定长度32位字符
    * name  模糊查询使用(针对测试计划名称)
    * currentStage  测试计划所处阶段（create,design,execute,report）
    * offset  页号，取值范围为1-20000
    * limit  每页显示的条目数量，取值范围为1-200
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'name' => 'string',
            'currentStage' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目id，项目唯一标识，固定长度32位字符
    * name  模糊查询使用(针对测试计划名称)
    * currentStage  测试计划所处阶段（create,design,execute,report）
    * offset  页号，取值范围为1-20000
    * limit  每页显示的条目数量，取值范围为1-200
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'name' => null,
        'currentStage' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * projectId  项目id，项目唯一标识，固定长度32位字符
    * name  模糊查询使用(针对测试计划名称)
    * currentStage  测试计划所处阶段（create,design,execute,report）
    * offset  页号，取值范围为1-20000
    * limit  每页显示的条目数量，取值范围为1-200
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'name' => 'name',
            'currentStage' => 'current_stage',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目id，项目唯一标识，固定长度32位字符
    * name  模糊查询使用(针对测试计划名称)
    * currentStage  测试计划所处阶段（create,design,execute,report）
    * offset  页号，取值范围为1-20000
    * limit  每页显示的条目数量，取值范围为1-200
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'name' => 'setName',
            'currentStage' => 'setCurrentStage',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目id，项目唯一标识，固定长度32位字符
    * name  模糊查询使用(针对测试计划名称)
    * currentStage  测试计划所处阶段（create,design,execute,report）
    * offset  页号，取值范围为1-20000
    * limit  每页显示的条目数量，取值范围为1-200
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'name' => 'getName',
            'currentStage' => 'getCurrentStage',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['currentStage'] = isset($data['currentStage']) ? $data['currentStage'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if (!preg_match("/[A-Za-z0-9]{32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /[A-Za-z0-9]{32}$/.";
            }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
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
    * Gets projectId
    *  项目id，项目唯一标识，固定长度32位字符
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目id，项目唯一标识，固定长度32位字符
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets name
    *  模糊查询使用(针对测试计划名称)
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 模糊查询使用(针对测试计划名称)
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets currentStage
    *  测试计划所处阶段（create,design,execute,report）
    *
    * @return string|null
    */
    public function getCurrentStage()
    {
        return $this->container['currentStage'];
    }

    /**
    * Sets currentStage
    *
    * @param string|null $currentStage 测试计划所处阶段（create,design,execute,report）
    *
    * @return $this
    */
    public function setCurrentStage($currentStage)
    {
        $this->container['currentStage'] = $currentStage;
        return $this;
    }

    /**
    * Gets offset
    *  页号，取值范围为1-20000
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset 页号，取值范围为1-20000
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示的条目数量，取值范围为1-200
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 每页显示的条目数量，取值范围为1-200
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

