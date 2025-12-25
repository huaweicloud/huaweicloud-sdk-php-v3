<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateChannelDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateChannelDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  action
    * description  描述信息
    * groupId  UUID
    * input  相关描述信息
    * nodes  相关描述信息
    * output  相关描述信息
    * parserId  UUID
    * title  相关标题
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ChannelAction',
            'description' => 'string',
            'groupId' => 'string',
            'input' => '\HuaweiCloud\SDK\SecMaster\V1\Model\CreateModuleVo[]',
            'nodes' => '\HuaweiCloud\SDK\SecMaster\V1\Model\NodeVo[]',
            'output' => '\HuaweiCloud\SDK\SecMaster\V1\Model\CreateModuleVo[]',
            'parserId' => 'string',
            'title' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  action
    * description  描述信息
    * groupId  UUID
    * input  相关描述信息
    * nodes  相关描述信息
    * output  相关描述信息
    * parserId  UUID
    * title  相关标题
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'description' => null,
        'groupId' => null,
        'input' => null,
        'nodes' => null,
        'output' => null,
        'parserId' => null,
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
    * action  action
    * description  描述信息
    * groupId  UUID
    * input  相关描述信息
    * nodes  相关描述信息
    * output  相关描述信息
    * parserId  UUID
    * title  相关标题
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'description' => 'description',
            'groupId' => 'group_id',
            'input' => 'input',
            'nodes' => 'nodes',
            'output' => 'output',
            'parserId' => 'parser_id',
            'title' => 'title'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  action
    * description  描述信息
    * groupId  UUID
    * input  相关描述信息
    * nodes  相关描述信息
    * output  相关描述信息
    * parserId  UUID
    * title  相关标题
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'description' => 'setDescription',
            'groupId' => 'setGroupId',
            'input' => 'setInput',
            'nodes' => 'setNodes',
            'output' => 'setOutput',
            'parserId' => 'setParserId',
            'title' => 'setTitle'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  action
    * description  描述信息
    * groupId  UUID
    * input  相关描述信息
    * nodes  相关描述信息
    * output  相关描述信息
    * parserId  UUID
    * title  相关标题
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'description' => 'getDescription',
            'groupId' => 'getGroupId',
            'input' => 'getInput',
            'nodes' => 'getNodes',
            'output' => 'getOutput',
            'parserId' => 'getParserId',
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['parserId'] = isset($data['parserId']) ? $data['parserId'] : null;
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
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
            if ((mb_strlen($this->container['groupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['groupId']) < 36)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['input'] === null) {
            $invalidProperties[] = "'input' can't be null";
        }
        if ($this->container['nodes'] === null) {
            $invalidProperties[] = "'nodes' can't be null";
        }
        if ($this->container['output'] === null) {
            $invalidProperties[] = "'output' can't be null";
        }
        if ($this->container['parserId'] === null) {
            $invalidProperties[] = "'parserId' can't be null";
        }
            if ((mb_strlen($this->container['parserId']) > 36)) {
                $invalidProperties[] = "invalid value for 'parserId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['parserId']) < 36)) {
                $invalidProperties[] = "invalid value for 'parserId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
            if ((mb_strlen($this->container['title']) > 256)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['title']) < 5)) {
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
    * Gets action
    *  action
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ChannelAction|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ChannelAction|null $action action
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
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
    * Gets groupId
    *  UUID
    *
    * @return string
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string $groupId UUID
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
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\CreateModuleVo[]
    */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
    * Sets input
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\CreateModuleVo[] $input 相关描述信息
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
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\NodeVo[]
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\NodeVo[] $nodes 相关描述信息
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
        return $this;
    }

    /**
    * Gets output
    *  相关描述信息
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\CreateModuleVo[]
    */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
    * Sets output
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\CreateModuleVo[] $output 相关描述信息
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
    * @return string
    */
    public function getParserId()
    {
        return $this->container['parserId'];
    }

    /**
    * Sets parserId
    *
    * @param string $parserId UUID
    *
    * @return $this
    */
    public function setParserId($parserId)
    {
        $this->container['parserId'] = $parserId;
        return $this;
    }

    /**
    * Gets title
    *  相关标题
    *
    * @return string
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string $title 相关标题
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

