<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAddonInstancesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAddonInstancesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群id
    * addonTemplateName  是否使用数据库存储的插件状态
    * isDatabaseStatus  插件包名字
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'addonTemplateName' => 'string',
            'isDatabaseStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群id
    * addonTemplateName  是否使用数据库存储的插件状态
    * isDatabaseStatus  插件包名字
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'addonTemplateName' => null,
        'isDatabaseStatus' => null
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
    * clusterId  集群id
    * addonTemplateName  是否使用数据库存储的插件状态
    * isDatabaseStatus  插件包名字
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'addonTemplateName' => 'addon_template_name',
            'isDatabaseStatus' => 'is_database_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群id
    * addonTemplateName  是否使用数据库存储的插件状态
    * isDatabaseStatus  插件包名字
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'addonTemplateName' => 'setAddonTemplateName',
            'isDatabaseStatus' => 'setIsDatabaseStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群id
    * addonTemplateName  是否使用数据库存储的插件状态
    * isDatabaseStatus  插件包名字
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'addonTemplateName' => 'getAddonTemplateName',
            'isDatabaseStatus' => 'getIsDatabaseStatus'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['addonTemplateName'] = isset($data['addonTemplateName']) ? $data['addonTemplateName'] : null;
        $this->container['isDatabaseStatus'] = isset($data['isDatabaseStatus']) ? $data['isDatabaseStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
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
    * Gets clusterId
    *  集群id
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId 集群id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets addonTemplateName
    *  是否使用数据库存储的插件状态
    *
    * @return string|null
    */
    public function getAddonTemplateName()
    {
        return $this->container['addonTemplateName'];
    }

    /**
    * Sets addonTemplateName
    *
    * @param string|null $addonTemplateName 是否使用数据库存储的插件状态
    *
    * @return $this
    */
    public function setAddonTemplateName($addonTemplateName)
    {
        $this->container['addonTemplateName'] = $addonTemplateName;
        return $this;
    }

    /**
    * Gets isDatabaseStatus
    *  插件包名字
    *
    * @return string|null
    */
    public function getIsDatabaseStatus()
    {
        return $this->container['isDatabaseStatus'];
    }

    /**
    * Sets isDatabaseStatus
    *
    * @param string|null $isDatabaseStatus 插件包名字
    *
    * @return $this
    */
    public function setIsDatabaseStatus($isDatabaseStatus)
    {
        $this->container['isDatabaseStatus'] = $isDatabaseStatus;
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

