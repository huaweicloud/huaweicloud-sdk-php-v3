<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMetadataResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMetadataResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupId  备份ID
    * backups  云服务器备份信息
    * flavor  云服务器规格信息
    * floatingips  云服务器浮动IP信息
    * interface  云服务器接口信息
    * ports  云服务器端口信息
    * server  云服务器信息
    * volumes  云服务器卷信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupId' => 'string',
            'backups' => 'string',
            'flavor' => 'string',
            'floatingips' => 'string[]',
            'interface' => 'string',
            'ports' => 'string[]',
            'server' => 'string',
            'volumes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupId  备份ID
    * backups  云服务器备份信息
    * flavor  云服务器规格信息
    * floatingips  云服务器浮动IP信息
    * interface  云服务器接口信息
    * ports  云服务器端口信息
    * server  云服务器信息
    * volumes  云服务器卷信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupId' => null,
        'backups' => null,
        'flavor' => null,
        'floatingips' => null,
        'interface' => null,
        'ports' => null,
        'server' => null,
        'volumes' => null
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
    * backupId  备份ID
    * backups  云服务器备份信息
    * flavor  云服务器规格信息
    * floatingips  云服务器浮动IP信息
    * interface  云服务器接口信息
    * ports  云服务器端口信息
    * server  云服务器信息
    * volumes  云服务器卷信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupId' => 'backup_id',
            'backups' => 'backups',
            'flavor' => 'flavor',
            'floatingips' => 'floatingips',
            'interface' => 'interface',
            'ports' => 'ports',
            'server' => 'server',
            'volumes' => 'volumes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupId  备份ID
    * backups  云服务器备份信息
    * flavor  云服务器规格信息
    * floatingips  云服务器浮动IP信息
    * interface  云服务器接口信息
    * ports  云服务器端口信息
    * server  云服务器信息
    * volumes  云服务器卷信息
    *
    * @var string[]
    */
    protected static $setters = [
            'backupId' => 'setBackupId',
            'backups' => 'setBackups',
            'flavor' => 'setFlavor',
            'floatingips' => 'setFloatingips',
            'interface' => 'setInterface',
            'ports' => 'setPorts',
            'server' => 'setServer',
            'volumes' => 'setVolumes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupId  备份ID
    * backups  云服务器备份信息
    * flavor  云服务器规格信息
    * floatingips  云服务器浮动IP信息
    * interface  云服务器接口信息
    * ports  云服务器端口信息
    * server  云服务器信息
    * volumes  云服务器卷信息
    *
    * @var string[]
    */
    protected static $getters = [
            'backupId' => 'getBackupId',
            'backups' => 'getBackups',
            'flavor' => 'getFlavor',
            'floatingips' => 'getFloatingips',
            'interface' => 'getInterface',
            'ports' => 'getPorts',
            'server' => 'getServer',
            'volumes' => 'getVolumes'
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
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['backups'] = isset($data['backups']) ? $data['backups'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['floatingips'] = isset($data['floatingips']) ? $data['floatingips'] : null;
        $this->container['interface'] = isset($data['interface']) ? $data['interface'] : null;
        $this->container['ports'] = isset($data['ports']) ? $data['ports'] : null;
        $this->container['server'] = isset($data['server']) ? $data['server'] : null;
        $this->container['volumes'] = isset($data['volumes']) ? $data['volumes'] : null;
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
    * Gets backupId
    *  备份ID
    *
    * @return string|null
    */
    public function getBackupId()
    {
        return $this->container['backupId'];
    }

    /**
    * Sets backupId
    *
    * @param string|null $backupId 备份ID
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
        return $this;
    }

    /**
    * Gets backups
    *  云服务器备份信息
    *
    * @return string|null
    */
    public function getBackups()
    {
        return $this->container['backups'];
    }

    /**
    * Sets backups
    *
    * @param string|null $backups 云服务器备份信息
    *
    * @return $this
    */
    public function setBackups($backups)
    {
        $this->container['backups'] = $backups;
        return $this;
    }

    /**
    * Gets flavor
    *  云服务器规格信息
    *
    * @return string|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string|null $flavor 云服务器规格信息
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets floatingips
    *  云服务器浮动IP信息
    *
    * @return string[]|null
    */
    public function getFloatingips()
    {
        return $this->container['floatingips'];
    }

    /**
    * Sets floatingips
    *
    * @param string[]|null $floatingips 云服务器浮动IP信息
    *
    * @return $this
    */
    public function setFloatingips($floatingips)
    {
        $this->container['floatingips'] = $floatingips;
        return $this;
    }

    /**
    * Gets interface
    *  云服务器接口信息
    *
    * @return string|null
    */
    public function getInterface()
    {
        return $this->container['interface'];
    }

    /**
    * Sets interface
    *
    * @param string|null $interface 云服务器接口信息
    *
    * @return $this
    */
    public function setInterface($interface)
    {
        $this->container['interface'] = $interface;
        return $this;
    }

    /**
    * Gets ports
    *  云服务器端口信息
    *
    * @return string[]|null
    */
    public function getPorts()
    {
        return $this->container['ports'];
    }

    /**
    * Sets ports
    *
    * @param string[]|null $ports 云服务器端口信息
    *
    * @return $this
    */
    public function setPorts($ports)
    {
        $this->container['ports'] = $ports;
        return $this;
    }

    /**
    * Gets server
    *  云服务器信息
    *
    * @return string|null
    */
    public function getServer()
    {
        return $this->container['server'];
    }

    /**
    * Sets server
    *
    * @param string|null $server 云服务器信息
    *
    * @return $this
    */
    public function setServer($server)
    {
        $this->container['server'] = $server;
        return $this;
    }

    /**
    * Gets volumes
    *  云服务器卷信息
    *
    * @return string[]|null
    */
    public function getVolumes()
    {
        return $this->container['volumes'];
    }

    /**
    * Sets volumes
    *
    * @param string[]|null $volumes 云服务器卷信息
    *
    * @return $this
    */
    public function setVolumes($volumes)
    {
        $this->container['volumes'] = $volumes;
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

