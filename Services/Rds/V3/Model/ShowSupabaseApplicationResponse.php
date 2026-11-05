<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSupabaseApplicationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSupabaseApplicationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * name  name
    * status  运行状态。
    * enableSsl  enableSsl
    * certId  certId
    * securityGroupId  securityGroupId
    * storageComponent  storageComponent
    * managedInstance  managedInstance
    * updatedTime  updatedTime
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'enableSsl' => 'bool',
            'certId' => 'string',
            'securityGroupId' => 'string',
            'storageComponent' => '\HuaweiCloud\SDK\Rds\V3\Model\SupabaseStorageComponentInfo',
            'managedInstance' => '\HuaweiCloud\SDK\Rds\V3\Model\SupabaseManagedInstanceInfo',
            'updatedTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * name  name
    * status  运行状态。
    * enableSsl  enableSsl
    * certId  certId
    * securityGroupId  securityGroupId
    * storageComponent  storageComponent
    * managedInstance  managedInstance
    * updatedTime  updatedTime
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'enableSsl' => null,
        'certId' => null,
        'securityGroupId' => null,
        'storageComponent' => null,
        'managedInstance' => null,
        'updatedTime' => 'int64'
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
    * id  id
    * name  name
    * status  运行状态。
    * enableSsl  enableSsl
    * certId  certId
    * securityGroupId  securityGroupId
    * storageComponent  storageComponent
    * managedInstance  managedInstance
    * updatedTime  updatedTime
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'enableSsl' => 'enable_ssl',
            'certId' => 'cert_id',
            'securityGroupId' => 'security_group_id',
            'storageComponent' => 'storage_component',
            'managedInstance' => 'managed_instance',
            'updatedTime' => 'updated_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * name  name
    * status  运行状态。
    * enableSsl  enableSsl
    * certId  certId
    * securityGroupId  securityGroupId
    * storageComponent  storageComponent
    * managedInstance  managedInstance
    * updatedTime  updatedTime
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'enableSsl' => 'setEnableSsl',
            'certId' => 'setCertId',
            'securityGroupId' => 'setSecurityGroupId',
            'storageComponent' => 'setStorageComponent',
            'managedInstance' => 'setManagedInstance',
            'updatedTime' => 'setUpdatedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * name  name
    * status  运行状态。
    * enableSsl  enableSsl
    * certId  certId
    * securityGroupId  securityGroupId
    * storageComponent  storageComponent
    * managedInstance  managedInstance
    * updatedTime  updatedTime
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'enableSsl' => 'getEnableSsl',
            'certId' => 'getCertId',
            'securityGroupId' => 'getSecurityGroupId',
            'storageComponent' => 'getStorageComponent',
            'managedInstance' => 'getManagedInstance',
            'updatedTime' => 'getUpdatedTime'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['enableSsl'] = isset($data['enableSsl']) ? $data['enableSsl'] : null;
        $this->container['certId'] = isset($data['certId']) ? $data['certId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['storageComponent'] = isset($data['storageComponent']) ? $data['storageComponent'] : null;
        $this->container['managedInstance'] = isset($data['managedInstance']) ? $data['managedInstance'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
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
    * Gets id
    *  id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  name
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
    * @param string|null $name name
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  运行状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 运行状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets enableSsl
    *  enableSsl
    *
    * @return bool|null
    */
    public function getEnableSsl()
    {
        return $this->container['enableSsl'];
    }

    /**
    * Sets enableSsl
    *
    * @param bool|null $enableSsl enableSsl
    *
    * @return $this
    */
    public function setEnableSsl($enableSsl)
    {
        $this->container['enableSsl'] = $enableSsl;
        return $this;
    }

    /**
    * Gets certId
    *  certId
    *
    * @return string|null
    */
    public function getCertId()
    {
        return $this->container['certId'];
    }

    /**
    * Sets certId
    *
    * @param string|null $certId certId
    *
    * @return $this
    */
    public function setCertId($certId)
    {
        $this->container['certId'] = $certId;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  securityGroupId
    *
    * @return string|null
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string|null $securityGroupId securityGroupId
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets storageComponent
    *  storageComponent
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\SupabaseStorageComponentInfo|null
    */
    public function getStorageComponent()
    {
        return $this->container['storageComponent'];
    }

    /**
    * Sets storageComponent
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\SupabaseStorageComponentInfo|null $storageComponent storageComponent
    *
    * @return $this
    */
    public function setStorageComponent($storageComponent)
    {
        $this->container['storageComponent'] = $storageComponent;
        return $this;
    }

    /**
    * Gets managedInstance
    *  managedInstance
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\SupabaseManagedInstanceInfo|null
    */
    public function getManagedInstance()
    {
        return $this->container['managedInstance'];
    }

    /**
    * Sets managedInstance
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\SupabaseManagedInstanceInfo|null $managedInstance managedInstance
    *
    * @return $this
    */
    public function setManagedInstance($managedInstance)
    {
        $this->container['managedInstance'] = $managedInstance;
        return $this;
    }

    /**
    * Gets updatedTime
    *  updatedTime
    *
    * @return int|null
    */
    public function getUpdatedTime()
    {
        return $this->container['updatedTime'];
    }

    /**
    * Sets updatedTime
    *
    * @param int|null $updatedTime updatedTime
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
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

