<?php

namespace HuaweiCloud\SDK\CloudTable\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Cluster implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Cluster';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authMode  是否开启IAM权限认证。 - false：不开启 - true：开启
    * enableLemon  是否开启Lemon(目前已关闭该参数，填false即可) - false：不开启 - true：开启
    * enableOpenTsdb  是否开启OpenTSDB。 - false：不开启 - true：开启
    * instance  instance
    * name  CloudTable集群的名称。
    * storageSize  存储值的大小。  取值范围: 1-[10240-1024*1024*1024]
    * storageType  存储类型： - ULTRAHIGH：超高IO - COMMON：普通IO
    * vpcId  集群所在的（虚拟网络私有云）VPC。
    * datastore  datastore
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authMode' => 'string',
            'enableLemon' => 'bool',
            'enableOpenTsdb' => 'bool',
            'instance' => '\HuaweiCloud\SDK\CloudTable\V2\Model\Instance',
            'name' => 'string',
            'storageSize' => 'int',
            'storageType' => 'string',
            'vpcId' => 'string',
            'datastore' => '\HuaweiCloud\SDK\CloudTable\V2\Model\Datastore'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authMode  是否开启IAM权限认证。 - false：不开启 - true：开启
    * enableLemon  是否开启Lemon(目前已关闭该参数，填false即可) - false：不开启 - true：开启
    * enableOpenTsdb  是否开启OpenTSDB。 - false：不开启 - true：开启
    * instance  instance
    * name  CloudTable集群的名称。
    * storageSize  存储值的大小。  取值范围: 1-[10240-1024*1024*1024]
    * storageType  存储类型： - ULTRAHIGH：超高IO - COMMON：普通IO
    * vpcId  集群所在的（虚拟网络私有云）VPC。
    * datastore  datastore
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authMode' => null,
        'enableLemon' => null,
        'enableOpenTsdb' => null,
        'instance' => null,
        'name' => null,
        'storageSize' => 'int32',
        'storageType' => null,
        'vpcId' => null,
        'datastore' => null
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
    * authMode  是否开启IAM权限认证。 - false：不开启 - true：开启
    * enableLemon  是否开启Lemon(目前已关闭该参数，填false即可) - false：不开启 - true：开启
    * enableOpenTsdb  是否开启OpenTSDB。 - false：不开启 - true：开启
    * instance  instance
    * name  CloudTable集群的名称。
    * storageSize  存储值的大小。  取值范围: 1-[10240-1024*1024*1024]
    * storageType  存储类型： - ULTRAHIGH：超高IO - COMMON：普通IO
    * vpcId  集群所在的（虚拟网络私有云）VPC。
    * datastore  datastore
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authMode' => 'auth_mode',
            'enableLemon' => 'enable_lemon',
            'enableOpenTsdb' => 'enable_openTSDB',
            'instance' => 'instance',
            'name' => 'name',
            'storageSize' => 'storage_size',
            'storageType' => 'storage_type',
            'vpcId' => 'vpc_id',
            'datastore' => 'datastore'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authMode  是否开启IAM权限认证。 - false：不开启 - true：开启
    * enableLemon  是否开启Lemon(目前已关闭该参数，填false即可) - false：不开启 - true：开启
    * enableOpenTsdb  是否开启OpenTSDB。 - false：不开启 - true：开启
    * instance  instance
    * name  CloudTable集群的名称。
    * storageSize  存储值的大小。  取值范围: 1-[10240-1024*1024*1024]
    * storageType  存储类型： - ULTRAHIGH：超高IO - COMMON：普通IO
    * vpcId  集群所在的（虚拟网络私有云）VPC。
    * datastore  datastore
    *
    * @var string[]
    */
    protected static $setters = [
            'authMode' => 'setAuthMode',
            'enableLemon' => 'setEnableLemon',
            'enableOpenTsdb' => 'setEnableOpenTsdb',
            'instance' => 'setInstance',
            'name' => 'setName',
            'storageSize' => 'setStorageSize',
            'storageType' => 'setStorageType',
            'vpcId' => 'setVpcId',
            'datastore' => 'setDatastore'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authMode  是否开启IAM权限认证。 - false：不开启 - true：开启
    * enableLemon  是否开启Lemon(目前已关闭该参数，填false即可) - false：不开启 - true：开启
    * enableOpenTsdb  是否开启OpenTSDB。 - false：不开启 - true：开启
    * instance  instance
    * name  CloudTable集群的名称。
    * storageSize  存储值的大小。  取值范围: 1-[10240-1024*1024*1024]
    * storageType  存储类型： - ULTRAHIGH：超高IO - COMMON：普通IO
    * vpcId  集群所在的（虚拟网络私有云）VPC。
    * datastore  datastore
    *
    * @var string[]
    */
    protected static $getters = [
            'authMode' => 'getAuthMode',
            'enableLemon' => 'getEnableLemon',
            'enableOpenTsdb' => 'getEnableOpenTsdb',
            'instance' => 'getInstance',
            'name' => 'getName',
            'storageSize' => 'getStorageSize',
            'storageType' => 'getStorageType',
            'vpcId' => 'getVpcId',
            'datastore' => 'getDatastore'
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
        $this->container['authMode'] = isset($data['authMode']) ? $data['authMode'] : null;
        $this->container['enableLemon'] = isset($data['enableLemon']) ? $data['enableLemon'] : null;
        $this->container['enableOpenTsdb'] = isset($data['enableOpenTsdb']) ? $data['enableOpenTsdb'] : null;
        $this->container['instance'] = isset($data['instance']) ? $data['instance'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['storageSize'] = isset($data['storageSize']) ? $data['storageSize'] : null;
        $this->container['storageType'] = isset($data['storageType']) ? $data['storageType'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instance'] === null) {
            $invalidProperties[] = "'instance' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['storageType'] === null) {
            $invalidProperties[] = "'storageType' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['datastore'] === null) {
            $invalidProperties[] = "'datastore' can't be null";
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
    * Gets authMode
    *  是否开启IAM权限认证。 - false：不开启 - true：开启
    *
    * @return string|null
    */
    public function getAuthMode()
    {
        return $this->container['authMode'];
    }

    /**
    * Sets authMode
    *
    * @param string|null $authMode 是否开启IAM权限认证。 - false：不开启 - true：开启
    *
    * @return $this
    */
    public function setAuthMode($authMode)
    {
        $this->container['authMode'] = $authMode;
        return $this;
    }

    /**
    * Gets enableLemon
    *  是否开启Lemon(目前已关闭该参数，填false即可) - false：不开启 - true：开启
    *
    * @return bool|null
    */
    public function getEnableLemon()
    {
        return $this->container['enableLemon'];
    }

    /**
    * Sets enableLemon
    *
    * @param bool|null $enableLemon 是否开启Lemon(目前已关闭该参数，填false即可) - false：不开启 - true：开启
    *
    * @return $this
    */
    public function setEnableLemon($enableLemon)
    {
        $this->container['enableLemon'] = $enableLemon;
        return $this;
    }

    /**
    * Gets enableOpenTsdb
    *  是否开启OpenTSDB。 - false：不开启 - true：开启
    *
    * @return bool|null
    */
    public function getEnableOpenTsdb()
    {
        return $this->container['enableOpenTsdb'];
    }

    /**
    * Sets enableOpenTsdb
    *
    * @param bool|null $enableOpenTsdb 是否开启OpenTSDB。 - false：不开启 - true：开启
    *
    * @return $this
    */
    public function setEnableOpenTsdb($enableOpenTsdb)
    {
        $this->container['enableOpenTsdb'] = $enableOpenTsdb;
        return $this;
    }

    /**
    * Gets instance
    *  instance
    *
    * @return \HuaweiCloud\SDK\CloudTable\V2\Model\Instance
    */
    public function getInstance()
    {
        return $this->container['instance'];
    }

    /**
    * Sets instance
    *
    * @param \HuaweiCloud\SDK\CloudTable\V2\Model\Instance $instance instance
    *
    * @return $this
    */
    public function setInstance($instance)
    {
        $this->container['instance'] = $instance;
        return $this;
    }

    /**
    * Gets name
    *  CloudTable集群的名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name CloudTable集群的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets storageSize
    *  存储值的大小。  取值范围: 1-[10240-1024*1024*1024]
    *
    * @return int|null
    */
    public function getStorageSize()
    {
        return $this->container['storageSize'];
    }

    /**
    * Sets storageSize
    *
    * @param int|null $storageSize 存储值的大小。  取值范围: 1-[10240-1024*1024*1024]
    *
    * @return $this
    */
    public function setStorageSize($storageSize)
    {
        $this->container['storageSize'] = $storageSize;
        return $this;
    }

    /**
    * Gets storageType
    *  存储类型： - ULTRAHIGH：超高IO - COMMON：普通IO
    *
    * @return string
    */
    public function getStorageType()
    {
        return $this->container['storageType'];
    }

    /**
    * Sets storageType
    *
    * @param string $storageType 存储类型： - ULTRAHIGH：超高IO - COMMON：普通IO
    *
    * @return $this
    */
    public function setStorageType($storageType)
    {
        $this->container['storageType'] = $storageType;
        return $this;
    }

    /**
    * Gets vpcId
    *  集群所在的（虚拟网络私有云）VPC。
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 集群所在的（虚拟网络私有云）VPC。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\CloudTable\V2\Model\Datastore
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\CloudTable\V2\Model\Datastore $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
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

