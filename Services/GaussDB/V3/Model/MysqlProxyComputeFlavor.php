<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MysqlProxyComputeFlavor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MysqlProxyComputeFlavor';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vcpus  CPU大小。例如：1表示1U。
    * ram  内存大小，单位为GB。
    * dbType  数据库类型。
    * id  Proxy规格ID。
    * specCode  Proxy规格码。
    * azStatus  其中key是可用区编号，value是规格所在az的状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vcpus' => 'string',
            'ram' => 'string',
            'dbType' => 'string',
            'id' => 'string',
            'specCode' => 'string',
            'azStatus' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vcpus  CPU大小。例如：1表示1U。
    * ram  内存大小，单位为GB。
    * dbType  数据库类型。
    * id  Proxy规格ID。
    * specCode  Proxy规格码。
    * azStatus  其中key是可用区编号，value是规格所在az的状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vcpus' => null,
        'ram' => null,
        'dbType' => null,
        'id' => null,
        'specCode' => null,
        'azStatus' => null
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
    * vcpus  CPU大小。例如：1表示1U。
    * ram  内存大小，单位为GB。
    * dbType  数据库类型。
    * id  Proxy规格ID。
    * specCode  Proxy规格码。
    * azStatus  其中key是可用区编号，value是规格所在az的状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vcpus' => 'vcpus',
            'ram' => 'ram',
            'dbType' => 'db_type',
            'id' => 'id',
            'specCode' => 'spec_code',
            'azStatus' => 'az_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vcpus  CPU大小。例如：1表示1U。
    * ram  内存大小，单位为GB。
    * dbType  数据库类型。
    * id  Proxy规格ID。
    * specCode  Proxy规格码。
    * azStatus  其中key是可用区编号，value是规格所在az的状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'vcpus' => 'setVcpus',
            'ram' => 'setRam',
            'dbType' => 'setDbType',
            'id' => 'setId',
            'specCode' => 'setSpecCode',
            'azStatus' => 'setAzStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vcpus  CPU大小。例如：1表示1U。
    * ram  内存大小，单位为GB。
    * dbType  数据库类型。
    * id  Proxy规格ID。
    * specCode  Proxy规格码。
    * azStatus  其中key是可用区编号，value是规格所在az的状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'vcpus' => 'getVcpus',
            'ram' => 'getRam',
            'dbType' => 'getDbType',
            'id' => 'getId',
            'specCode' => 'getSpecCode',
            'azStatus' => 'getAzStatus'
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
        $this->container['vcpus'] = isset($data['vcpus']) ? $data['vcpus'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
        $this->container['dbType'] = isset($data['dbType']) ? $data['dbType'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['azStatus'] = isset($data['azStatus']) ? $data['azStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['vcpus'] === null) {
            $invalidProperties[] = "'vcpus' can't be null";
        }
        if ($this->container['ram'] === null) {
            $invalidProperties[] = "'ram' can't be null";
        }
        if ($this->container['dbType'] === null) {
            $invalidProperties[] = "'dbType' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['specCode'] === null) {
            $invalidProperties[] = "'specCode' can't be null";
        }
        if ($this->container['azStatus'] === null) {
            $invalidProperties[] = "'azStatus' can't be null";
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
    * Gets vcpus
    *  CPU大小。例如：1表示1U。
    *
    * @return string
    */
    public function getVcpus()
    {
        return $this->container['vcpus'];
    }

    /**
    * Sets vcpus
    *
    * @param string $vcpus CPU大小。例如：1表示1U。
    *
    * @return $this
    */
    public function setVcpus($vcpus)
    {
        $this->container['vcpus'] = $vcpus;
        return $this;
    }

    /**
    * Gets ram
    *  内存大小，单位为GB。
    *
    * @return string
    */
    public function getRam()
    {
        return $this->container['ram'];
    }

    /**
    * Sets ram
    *
    * @param string $ram 内存大小，单位为GB。
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
        return $this;
    }

    /**
    * Gets dbType
    *  数据库类型。
    *
    * @return string
    */
    public function getDbType()
    {
        return $this->container['dbType'];
    }

    /**
    * Sets dbType
    *
    * @param string $dbType 数据库类型。
    *
    * @return $this
    */
    public function setDbType($dbType)
    {
        $this->container['dbType'] = $dbType;
        return $this;
    }

    /**
    * Gets id
    *  Proxy规格ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id Proxy规格ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets specCode
    *  Proxy规格码。
    *
    * @return string
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string $specCode Proxy规格码。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets azStatus
    *  其中key是可用区编号，value是规格所在az的状态。
    *
    * @return object
    */
    public function getAzStatus()
    {
        return $this->container['azStatus'];
    }

    /**
    * Sets azStatus
    *
    * @param object $azStatus 其中key是可用区编号，value是规格所在az的状态。
    *
    * @return $this
    */
    public function setAzStatus($azStatus)
    {
        $this->container['azStatus'] = $azStatus;
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

