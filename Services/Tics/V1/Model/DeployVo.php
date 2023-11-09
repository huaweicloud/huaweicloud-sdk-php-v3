<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeployVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeployVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeId  节点Id
    * nodeName  节点名称
    * nodePartnerAlias  参与方别名
    * nodeType  节点类型,AGENT.计算节点，AGG.聚合节点，AGG_MANAGER.聚合器管理节点,SERVER.控制节点
    * stages  执行阶段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeId' => 'string',
            'nodeName' => 'string',
            'nodePartnerAlias' => 'string',
            'nodeType' => 'string',
            'stages' => '\HuaweiCloud\SDK\Tics\V1\Model\StageVo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeId  节点Id
    * nodeName  节点名称
    * nodePartnerAlias  参与方别名
    * nodeType  节点类型,AGENT.计算节点，AGG.聚合节点，AGG_MANAGER.聚合器管理节点,SERVER.控制节点
    * stages  执行阶段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeId' => null,
        'nodeName' => null,
        'nodePartnerAlias' => null,
        'nodeType' => null,
        'stages' => null
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
    * nodeId  节点Id
    * nodeName  节点名称
    * nodePartnerAlias  参与方别名
    * nodeType  节点类型,AGENT.计算节点，AGG.聚合节点，AGG_MANAGER.聚合器管理节点,SERVER.控制节点
    * stages  执行阶段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeId' => 'node_id',
            'nodeName' => 'node_name',
            'nodePartnerAlias' => 'node_partner_alias',
            'nodeType' => 'node_type',
            'stages' => 'stages'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeId  节点Id
    * nodeName  节点名称
    * nodePartnerAlias  参与方别名
    * nodeType  节点类型,AGENT.计算节点，AGG.聚合节点，AGG_MANAGER.聚合器管理节点,SERVER.控制节点
    * stages  执行阶段
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeId' => 'setNodeId',
            'nodeName' => 'setNodeName',
            'nodePartnerAlias' => 'setNodePartnerAlias',
            'nodeType' => 'setNodeType',
            'stages' => 'setStages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeId  节点Id
    * nodeName  节点名称
    * nodePartnerAlias  参与方别名
    * nodeType  节点类型,AGENT.计算节点，AGG.聚合节点，AGG_MANAGER.聚合器管理节点,SERVER.控制节点
    * stages  执行阶段
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeId' => 'getNodeId',
            'nodeName' => 'getNodeName',
            'nodePartnerAlias' => 'getNodePartnerAlias',
            'nodeType' => 'getNodeType',
            'stages' => 'getStages'
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
    const NODE_TYPE_AGENT = 'AGENT';
    const NODE_TYPE_AGG = 'AGG';
    const NODE_TYPE_AGG_MANAGER = 'AGG_MANAGER';
    const NODE_TYPE_SERVER = 'SERVER';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNodeTypeAllowableValues()
    {
        return [
            self::NODE_TYPE_AGENT,
            self::NODE_TYPE_AGG,
            self::NODE_TYPE_AGG_MANAGER,
            self::NODE_TYPE_SERVER,
        ];
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
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['nodePartnerAlias'] = isset($data['nodePartnerAlias']) ? $data['nodePartnerAlias'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['stages'] = isset($data['stages']) ? $data['stages'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
        }
            if ((mb_strlen($this->container['nodeId']) > 32)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['nodeId']) < 0)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['nodeName'] === null) {
            $invalidProperties[] = "'nodeName' can't be null";
        }
            if ((mb_strlen($this->container['nodeName']) > 128)) {
                $invalidProperties[] = "invalid value for 'nodeName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['nodeName']) < 0)) {
                $invalidProperties[] = "invalid value for 'nodeName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['nodePartnerAlias'] === null) {
            $invalidProperties[] = "'nodePartnerAlias' can't be null";
        }
            if ((mb_strlen($this->container['nodePartnerAlias']) > 128)) {
                $invalidProperties[] = "invalid value for 'nodePartnerAlias', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['nodePartnerAlias']) < 0)) {
                $invalidProperties[] = "invalid value for 'nodePartnerAlias', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getNodeTypeAllowableValues();
                if (!is_null($this->container['nodeType']) && !in_array($this->container['nodeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'nodeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets nodeId
    *  节点Id
    *
    * @return string
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string $nodeId 节点Id
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets nodeName
    *  节点名称
    *
    * @return string
    */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
    * Sets nodeName
    *
    * @param string $nodeName 节点名称
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets nodePartnerAlias
    *  参与方别名
    *
    * @return string
    */
    public function getNodePartnerAlias()
    {
        return $this->container['nodePartnerAlias'];
    }

    /**
    * Sets nodePartnerAlias
    *
    * @param string $nodePartnerAlias 参与方别名
    *
    * @return $this
    */
    public function setNodePartnerAlias($nodePartnerAlias)
    {
        $this->container['nodePartnerAlias'] = $nodePartnerAlias;
        return $this;
    }

    /**
    * Gets nodeType
    *  节点类型,AGENT.计算节点，AGG.聚合节点，AGG_MANAGER.聚合器管理节点,SERVER.控制节点
    *
    * @return string|null
    */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
    * Sets nodeType
    *
    * @param string|null $nodeType 节点类型,AGENT.计算节点，AGG.聚合节点，AGG_MANAGER.聚合器管理节点,SERVER.控制节点
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
    * Gets stages
    *  执行阶段
    *
    * @return \HuaweiCloud\SDK\Tics\V1\Model\StageVo[]|null
    */
    public function getStages()
    {
        return $this->container['stages'];
    }

    /**
    * Sets stages
    *
    * @param \HuaweiCloud\SDK\Tics\V1\Model\StageVo[]|null $stages 执行阶段
    *
    * @return $this
    */
    public function setStages($stages)
    {
        $this->container['stages'] = $stages;
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

