<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCollectorChannelResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCollectorChannelResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createBy  Iam用户ID
    * description  描述信息
    * error  error
    * groupId  UUID
    * input  相关描述信息
    * nodes  相关描述信息
    * operationStatus  operationStatus
    * output  相关描述信息
    * parserId  UUID
    * parserName  所属租户名称
    * title  相关标题
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createBy' => 'string',
            'description' => 'string',
            'error' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ChannelErrorType',
            'groupId' => 'string',
            'input' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ShowModuleVo[]',
            'nodes' => '\HuaweiCloud\SDK\SecMaster\V1\Model\NodeVo[]',
            'operationStatus' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ChannelOperationStatus',
            'output' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ShowModuleVo[]',
            'parserId' => 'string',
            'parserName' => 'string',
            'title' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createBy  Iam用户ID
    * description  描述信息
    * error  error
    * groupId  UUID
    * input  相关描述信息
    * nodes  相关描述信息
    * operationStatus  operationStatus
    * output  相关描述信息
    * parserId  UUID
    * parserName  所属租户名称
    * title  相关标题
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createBy' => null,
        'description' => null,
        'error' => null,
        'groupId' => null,
        'input' => null,
        'nodes' => null,
        'operationStatus' => null,
        'output' => null,
        'parserId' => null,
        'parserName' => null,
        'title' => null
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
    * createBy  Iam用户ID
    * description  描述信息
    * error  error
    * groupId  UUID
    * input  相关描述信息
    * nodes  相关描述信息
    * operationStatus  operationStatus
    * output  相关描述信息
    * parserId  UUID
    * parserName  所属租户名称
    * title  相关标题
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createBy' => 'create_by',
            'description' => 'description',
            'error' => 'error',
            'groupId' => 'group_id',
            'input' => 'input',
            'nodes' => 'nodes',
            'operationStatus' => 'operation_status',
            'output' => 'output',
            'parserId' => 'parser_id',
            'parserName' => 'parser_name',
            'title' => 'title'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createBy  Iam用户ID
    * description  描述信息
    * error  error
    * groupId  UUID
    * input  相关描述信息
    * nodes  相关描述信息
    * operationStatus  operationStatus
    * output  相关描述信息
    * parserId  UUID
    * parserName  所属租户名称
    * title  相关标题
    *
    * @var string[]
    */
    protected static $setters = [
            'createBy' => 'setCreateBy',
            'description' => 'setDescription',
            'error' => 'setError',
            'groupId' => 'setGroupId',
            'input' => 'setInput',
            'nodes' => 'setNodes',
            'operationStatus' => 'setOperationStatus',
            'output' => 'setOutput',
            'parserId' => 'setParserId',
            'parserName' => 'setParserName',
            'title' => 'setTitle'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createBy  Iam用户ID
    * description  描述信息
    * error  error
    * groupId  UUID
    * input  相关描述信息
    * nodes  相关描述信息
    * operationStatus  operationStatus
    * output  相关描述信息
    * parserId  UUID
    * parserName  所属租户名称
    * title  相关标题
    *
    * @var string[]
    */
    protected static $getters = [
            'createBy' => 'getCreateBy',
            'description' => 'getDescription',
            'error' => 'getError',
            'groupId' => 'getGroupId',
            'input' => 'getInput',
            'nodes' => 'getNodes',
            'operationStatus' => 'getOperationStatus',
            'output' => 'getOutput',
            'parserId' => 'getParserId',
            'parserName' => 'getParserName',
            'title' => 'getTitle'
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
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['operationStatus'] = isset($data['operationStatus']) ? $data['operationStatus'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['parserId'] = isset($data['parserId']) ? $data['parserId'] : null;
        $this->container['parserName'] = isset($data['parserName']) ? $data['parserName'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) > 32)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) < 32)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 36)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['parserId']) && (mb_strlen($this->container['parserId']) > 36)) {
                $invalidProperties[] = "invalid value for 'parserId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['parserId']) && (mb_strlen($this->container['parserId']) < 36)) {
                $invalidProperties[] = "invalid value for 'parserId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['parserName']) && (mb_strlen($this->container['parserName']) > 63)) {
                $invalidProperties[] = "invalid value for 'parserName', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['parserName']) && (mb_strlen($this->container['parserName']) < 1)) {
                $invalidProperties[] = "invalid value for 'parserName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 256)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 5)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 5.";
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
    * Gets createBy
    *  Iam用户ID
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy Iam用户ID
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets description
    *  描述信息
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets error
    *  error
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ChannelErrorType|null
    */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
    * Sets error
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ChannelErrorType|null $error error
    *
    * @return $this
    */
    public function setError($error)
    {
        $this->container['error'] = $error;
        return $this;
    }

    /**
    * Gets groupId
    *  UUID
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId UUID
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets input
    *  相关描述信息
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ShowModuleVo[]|null
    */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
    * Sets input
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ShowModuleVo[]|null $input 相关描述信息
    *
    * @return $this
    */
    public function setInput($input)
    {
        $this->container['input'] = $input;
        return $this;
    }

    /**
    * Gets nodes
    *  相关描述信息
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\NodeVo[]|null
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\NodeVo[]|null $nodes 相关描述信息
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
        return $this;
    }

    /**
    * Gets operationStatus
    *  operationStatus
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ChannelOperationStatus|null
    */
    public function getOperationStatus()
    {
        return $this->container['operationStatus'];
    }

    /**
    * Sets operationStatus
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ChannelOperationStatus|null $operationStatus operationStatus
    *
    * @return $this
    */
    public function setOperationStatus($operationStatus)
    {
        $this->container['operationStatus'] = $operationStatus;
        return $this;
    }

    /**
    * Gets output
    *  相关描述信息
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ShowModuleVo[]|null
    */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
    * Sets output
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ShowModuleVo[]|null $output 相关描述信息
    *
    * @return $this
    */
    public function setOutput($output)
    {
        $this->container['output'] = $output;
        return $this;
    }

    /**
    * Gets parserId
    *  UUID
    *
    * @return string|null
    */
    public function getParserId()
    {
        return $this->container['parserId'];
    }

    /**
    * Sets parserId
    *
    * @param string|null $parserId UUID
    *
    * @return $this
    */
    public function setParserId($parserId)
    {
        $this->container['parserId'] = $parserId;
        return $this;
    }

    /**
    * Gets parserName
    *  所属租户名称
    *
    * @return string|null
    */
    public function getParserName()
    {
        return $this->container['parserName'];
    }

    /**
    * Sets parserName
    *
    * @param string|null $parserName 所属租户名称
    *
    * @return $this
    */
    public function setParserName($parserName)
    {
        $this->container['parserName'] = $parserName;
        return $this;
    }

    /**
    * Gets title
    *  相关标题
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 相关标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
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

