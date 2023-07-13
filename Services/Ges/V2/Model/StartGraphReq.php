<?php

namespace HuaweiCloud\SDK\Ges\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartGraphReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartGraphReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * graphBackupId  启动图时关联的备份ID，设置此参数时，表示从备份进行启动；如果为空，表示从上次关闭图时的状态启动。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'graphBackupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * graphBackupId  启动图时关联的备份ID，设置此参数时，表示从备份进行启动；如果为空，表示从上次关闭图时的状态启动。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'graphBackupId' => null
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
    * graphBackupId  启动图时关联的备份ID，设置此参数时，表示从备份进行启动；如果为空，表示从上次关闭图时的状态启动。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'graphBackupId' => 'graph_backup_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * graphBackupId  启动图时关联的备份ID，设置此参数时，表示从备份进行启动；如果为空，表示从上次关闭图时的状态启动。
    *
    * @var string[]
    */
    protected static $setters = [
            'graphBackupId' => 'setGraphBackupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * graphBackupId  启动图时关联的备份ID，设置此参数时，表示从备份进行启动；如果为空，表示从上次关闭图时的状态启动。
    *
    * @var string[]
    */
    protected static $getters = [
            'graphBackupId' => 'getGraphBackupId'
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
        $this->container['graphBackupId'] = isset($data['graphBackupId']) ? $data['graphBackupId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets graphBackupId
    *  启动图时关联的备份ID，设置此参数时，表示从备份进行启动；如果为空，表示从上次关闭图时的状态启动。
    *
    * @return string|null
    */
    public function getGraphBackupId()
    {
        return $this->container['graphBackupId'];
    }

    /**
    * Sets graphBackupId
    *
    * @param string|null $graphBackupId 启动图时关联的备份ID，设置此参数时，表示从备份进行启动；如果为空，表示从上次关闭图时的状态启动。
    *
    * @return $this
    */
    public function setGraphBackupId($graphBackupId)
    {
        $this->container['graphBackupId'] = $graphBackupId;
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

