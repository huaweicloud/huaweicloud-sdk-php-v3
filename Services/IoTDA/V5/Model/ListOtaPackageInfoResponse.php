<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListOtaPackageInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListOtaPackageInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * packages  升级包列表
    * page  page
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'packages' => '\HuaweiCloud\SDK\IoTDA\V5\Model\OtaPackageInfo[]',
            'page' => '\HuaweiCloud\SDK\IoTDA\V5\Model\PageInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * packages  升级包列表
    * page  page
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'packages' => null,
        'page' => null
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
    * packages  升级包列表
    * page  page
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'packages' => 'packages',
            'page' => 'page'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * packages  升级包列表
    * page  page
    *
    * @var string[]
    */
    protected static $setters = [
            'packages' => 'setPackages',
            'page' => 'setPage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * packages  升级包列表
    * page  page
    *
    * @var string[]
    */
    protected static $getters = [
            'packages' => 'getPackages',
            'page' => 'getPage'
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
        $this->container['packages'] = isset($data['packages']) ? $data['packages'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
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
    * Gets packages
    *  升级包列表
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\OtaPackageInfo[]|null
    */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
    * Sets packages
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\OtaPackageInfo[]|null $packages 升级包列表
    *
    * @return $this
    */
    public function setPackages($packages)
    {
        $this->container['packages'] = $packages;
        return $this;
    }

    /**
    * Gets page
    *  page
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\PageInfo|null
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\PageInfo|null $page page
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
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

