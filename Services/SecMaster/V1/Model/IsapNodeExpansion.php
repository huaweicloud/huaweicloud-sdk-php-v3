<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IsapNodeExpansion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IsapNodeExpansion';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customLabel  自定义标签
    * dataCenter  数据中心
    * description  描述信息
    * maintainer  维护人
    * networkPlane  网络平面
    * nodeId  UUID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customLabel' => 'string',
            'dataCenter' => 'string',
            'description' => 'string',
            'maintainer' => 'string',
            'networkPlane' => 'string',
            'nodeId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customLabel  自定义标签
    * dataCenter  数据中心
    * description  描述信息
    * maintainer  维护人
    * networkPlane  网络平面
    * nodeId  UUID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customLabel' => null,
        'dataCenter' => null,
        'description' => null,
        'maintainer' => null,
        'networkPlane' => null,
        'nodeId' => null
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
    * customLabel  自定义标签
    * dataCenter  数据中心
    * description  描述信息
    * maintainer  维护人
    * networkPlane  网络平面
    * nodeId  UUID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customLabel' => 'custom_label',
            'dataCenter' => 'data_center',
            'description' => 'description',
            'maintainer' => 'maintainer',
            'networkPlane' => 'network_plane',
            'nodeId' => 'node_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customLabel  自定义标签
    * dataCenter  数据中心
    * description  描述信息
    * maintainer  维护人
    * networkPlane  网络平面
    * nodeId  UUID
    *
    * @var string[]
    */
    protected static $setters = [
            'customLabel' => 'setCustomLabel',
            'dataCenter' => 'setDataCenter',
            'description' => 'setDescription',
            'maintainer' => 'setMaintainer',
            'networkPlane' => 'setNetworkPlane',
            'nodeId' => 'setNodeId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customLabel  自定义标签
    * dataCenter  数据中心
    * description  描述信息
    * maintainer  维护人
    * networkPlane  网络平面
    * nodeId  UUID
    *
    * @var string[]
    */
    protected static $getters = [
            'customLabel' => 'getCustomLabel',
            'dataCenter' => 'getDataCenter',
            'description' => 'getDescription',
            'maintainer' => 'getMaintainer',
            'networkPlane' => 'getNetworkPlane',
            'nodeId' => 'getNodeId'
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
        $this->container['customLabel'] = isset($data['customLabel']) ? $data['customLabel'] : null;
        $this->container['dataCenter'] = isset($data['dataCenter']) ? $data['dataCenter'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['maintainer'] = isset($data['maintainer']) ? $data['maintainer'] : null;
        $this->container['networkPlane'] = isset($data['networkPlane']) ? $data['networkPlane'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['customLabel']) && (mb_strlen($this->container['customLabel']) > 1024)) {
                $invalidProperties[] = "invalid value for 'customLabel', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['customLabel']) && (mb_strlen($this->container['customLabel']) < 0)) {
                $invalidProperties[] = "invalid value for 'customLabel', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dataCenter']) && (mb_strlen($this->container['dataCenter']) > 1024)) {
                $invalidProperties[] = "invalid value for 'dataCenter', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['dataCenter']) && (mb_strlen($this->container['dataCenter']) < 0)) {
                $invalidProperties[] = "invalid value for 'dataCenter', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['maintainer']) && (mb_strlen($this->container['maintainer']) > 1024)) {
                $invalidProperties[] = "invalid value for 'maintainer', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['maintainer']) && (mb_strlen($this->container['maintainer']) < 0)) {
                $invalidProperties[] = "invalid value for 'maintainer', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['networkPlane']) && (mb_strlen($this->container['networkPlane']) > 1024)) {
                $invalidProperties[] = "invalid value for 'networkPlane', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['networkPlane']) && (mb_strlen($this->container['networkPlane']) < 0)) {
                $invalidProperties[] = "invalid value for 'networkPlane', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nodeId']) && (mb_strlen($this->container['nodeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['nodeId']) && (mb_strlen($this->container['nodeId']) < 36)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be bigger than or equal to 36.";
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
    * Gets customLabel
    *  自定义标签
    *
    * @return string|null
    */
    public function getCustomLabel()
    {
        return $this->container['customLabel'];
    }

    /**
    * Sets customLabel
    *
    * @param string|null $customLabel 自定义标签
    *
    * @return $this
    */
    public function setCustomLabel($customLabel)
    {
        $this->container['customLabel'] = $customLabel;
        return $this;
    }

    /**
    * Gets dataCenter
    *  数据中心
    *
    * @return string|null
    */
    public function getDataCenter()
    {
        return $this->container['dataCenter'];
    }

    /**
    * Sets dataCenter
    *
    * @param string|null $dataCenter 数据中心
    *
    * @return $this
    */
    public function setDataCenter($dataCenter)
    {
        $this->container['dataCenter'] = $dataCenter;
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
    * Gets maintainer
    *  维护人
    *
    * @return string|null
    */
    public function getMaintainer()
    {
        return $this->container['maintainer'];
    }

    /**
    * Sets maintainer
    *
    * @param string|null $maintainer 维护人
    *
    * @return $this
    */
    public function setMaintainer($maintainer)
    {
        $this->container['maintainer'] = $maintainer;
        return $this;
    }

    /**
    * Gets networkPlane
    *  网络平面
    *
    * @return string|null
    */
    public function getNetworkPlane()
    {
        return $this->container['networkPlane'];
    }

    /**
    * Sets networkPlane
    *
    * @param string|null $networkPlane 网络平面
    *
    * @return $this
    */
    public function setNetworkPlane($networkPlane)
    {
        $this->container['networkPlane'] = $networkPlane;
        return $this;
    }

    /**
    * Gets nodeId
    *  UUID
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId UUID
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
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

