<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryDeviceTypeResultDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryDeviceTypeResultDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  终端类型，区分自研和第三方终端。 * TE：华为自研硬终端 * 3rd：第三方硬终端
    * model  终端型号，枚举类型。 * TE10 * TE20 * TE30 * TE40 * TE50 * TE60 * HUAWEI Box 300 * HUAWEI Box 500 * HUAWEI Box 600 * HUAWEI Box 700 * HUAWEI Box 900 * DP300 * HUAWEI Box 200 * HUAWEI Box 300 * HUAWEI Box 500 * HUAWEI Board * polycomcisco
    * enableActiveCode  是否支持激活码。
    * resolution  屏幕分辨率。1080P、720P等。
    * supportProjectionCode  是否支持投影码。
    * supportSvc  是否支持SVC。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'model' => 'string',
            'enableActiveCode' => 'bool',
            'resolution' => 'string',
            'supportProjectionCode' => 'bool',
            'supportSvc' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  终端类型，区分自研和第三方终端。 * TE：华为自研硬终端 * 3rd：第三方硬终端
    * model  终端型号，枚举类型。 * TE10 * TE20 * TE30 * TE40 * TE50 * TE60 * HUAWEI Box 300 * HUAWEI Box 500 * HUAWEI Box 600 * HUAWEI Box 700 * HUAWEI Box 900 * DP300 * HUAWEI Box 200 * HUAWEI Box 300 * HUAWEI Box 500 * HUAWEI Board * polycomcisco
    * enableActiveCode  是否支持激活码。
    * resolution  屏幕分辨率。1080P、720P等。
    * supportProjectionCode  是否支持投影码。
    * supportSvc  是否支持SVC。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'model' => null,
        'enableActiveCode' => null,
        'resolution' => null,
        'supportProjectionCode' => null,
        'supportSvc' => null
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
    * type  终端类型，区分自研和第三方终端。 * TE：华为自研硬终端 * 3rd：第三方硬终端
    * model  终端型号，枚举类型。 * TE10 * TE20 * TE30 * TE40 * TE50 * TE60 * HUAWEI Box 300 * HUAWEI Box 500 * HUAWEI Box 600 * HUAWEI Box 700 * HUAWEI Box 900 * DP300 * HUAWEI Box 200 * HUAWEI Box 300 * HUAWEI Box 500 * HUAWEI Board * polycomcisco
    * enableActiveCode  是否支持激活码。
    * resolution  屏幕分辨率。1080P、720P等。
    * supportProjectionCode  是否支持投影码。
    * supportSvc  是否支持SVC。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'model' => 'model',
            'enableActiveCode' => 'enableActiveCode',
            'resolution' => 'resolution',
            'supportProjectionCode' => 'supportProjectionCode',
            'supportSvc' => 'supportSVC'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  终端类型，区分自研和第三方终端。 * TE：华为自研硬终端 * 3rd：第三方硬终端
    * model  终端型号，枚举类型。 * TE10 * TE20 * TE30 * TE40 * TE50 * TE60 * HUAWEI Box 300 * HUAWEI Box 500 * HUAWEI Box 600 * HUAWEI Box 700 * HUAWEI Box 900 * DP300 * HUAWEI Box 200 * HUAWEI Box 300 * HUAWEI Box 500 * HUAWEI Board * polycomcisco
    * enableActiveCode  是否支持激活码。
    * resolution  屏幕分辨率。1080P、720P等。
    * supportProjectionCode  是否支持投影码。
    * supportSvc  是否支持SVC。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'model' => 'setModel',
            'enableActiveCode' => 'setEnableActiveCode',
            'resolution' => 'setResolution',
            'supportProjectionCode' => 'setSupportProjectionCode',
            'supportSvc' => 'setSupportSvc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  终端类型，区分自研和第三方终端。 * TE：华为自研硬终端 * 3rd：第三方硬终端
    * model  终端型号，枚举类型。 * TE10 * TE20 * TE30 * TE40 * TE50 * TE60 * HUAWEI Box 300 * HUAWEI Box 500 * HUAWEI Box 600 * HUAWEI Box 700 * HUAWEI Box 900 * DP300 * HUAWEI Box 200 * HUAWEI Box 300 * HUAWEI Box 500 * HUAWEI Board * polycomcisco
    * enableActiveCode  是否支持激活码。
    * resolution  屏幕分辨率。1080P、720P等。
    * supportProjectionCode  是否支持投影码。
    * supportSvc  是否支持SVC。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'model' => 'getModel',
            'enableActiveCode' => 'getEnableActiveCode',
            'resolution' => 'getResolution',
            'supportProjectionCode' => 'getSupportProjectionCode',
            'supportSvc' => 'getSupportSvc'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['enableActiveCode'] = isset($data['enableActiveCode']) ? $data['enableActiveCode'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['supportProjectionCode'] = isset($data['supportProjectionCode']) ? $data['supportProjectionCode'] : null;
        $this->container['supportSvc'] = isset($data['supportSvc']) ? $data['supportSvc'] : null;
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
    * Gets type
    *  终端类型，区分自研和第三方终端。 * TE：华为自研硬终端 * 3rd：第三方硬终端
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 终端类型，区分自研和第三方终端。 * TE：华为自研硬终端 * 3rd：第三方硬终端
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets model
    *  终端型号，枚举类型。 * TE10 * TE20 * TE30 * TE40 * TE50 * TE60 * HUAWEI Box 300 * HUAWEI Box 500 * HUAWEI Box 600 * HUAWEI Box 700 * HUAWEI Box 900 * DP300 * HUAWEI Box 200 * HUAWEI Box 300 * HUAWEI Box 500 * HUAWEI Board * polycomcisco
    *
    * @return string|null
    */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
    * Sets model
    *
    * @param string|null $model 终端型号，枚举类型。 * TE10 * TE20 * TE30 * TE40 * TE50 * TE60 * HUAWEI Box 300 * HUAWEI Box 500 * HUAWEI Box 600 * HUAWEI Box 700 * HUAWEI Box 900 * DP300 * HUAWEI Box 200 * HUAWEI Box 300 * HUAWEI Box 500 * HUAWEI Board * polycomcisco
    *
    * @return $this
    */
    public function setModel($model)
    {
        $this->container['model'] = $model;
        return $this;
    }

    /**
    * Gets enableActiveCode
    *  是否支持激活码。
    *
    * @return bool|null
    */
    public function getEnableActiveCode()
    {
        return $this->container['enableActiveCode'];
    }

    /**
    * Sets enableActiveCode
    *
    * @param bool|null $enableActiveCode 是否支持激活码。
    *
    * @return $this
    */
    public function setEnableActiveCode($enableActiveCode)
    {
        $this->container['enableActiveCode'] = $enableActiveCode;
        return $this;
    }

    /**
    * Gets resolution
    *  屏幕分辨率。1080P、720P等。
    *
    * @return string|null
    */
    public function getResolution()
    {
        return $this->container['resolution'];
    }

    /**
    * Sets resolution
    *
    * @param string|null $resolution 屏幕分辨率。1080P、720P等。
    *
    * @return $this
    */
    public function setResolution($resolution)
    {
        $this->container['resolution'] = $resolution;
        return $this;
    }

    /**
    * Gets supportProjectionCode
    *  是否支持投影码。
    *
    * @return bool|null
    */
    public function getSupportProjectionCode()
    {
        return $this->container['supportProjectionCode'];
    }

    /**
    * Sets supportProjectionCode
    *
    * @param bool|null $supportProjectionCode 是否支持投影码。
    *
    * @return $this
    */
    public function setSupportProjectionCode($supportProjectionCode)
    {
        $this->container['supportProjectionCode'] = $supportProjectionCode;
        return $this;
    }

    /**
    * Gets supportSvc
    *  是否支持SVC。
    *
    * @return bool|null
    */
    public function getSupportSvc()
    {
        return $this->container['supportSvc'];
    }

    /**
    * Sets supportSvc
    *
    * @param bool|null $supportSvc 是否支持SVC。
    *
    * @return $this
    */
    public function setSupportSvc($supportSvc)
    {
        $this->container['supportSvc'] = $supportSvc;
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

