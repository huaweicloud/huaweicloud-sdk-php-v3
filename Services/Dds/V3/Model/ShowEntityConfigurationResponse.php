<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowEntityConfigurationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowEntityConfigurationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * datastoreVersion  数据库版本。
    * datastoreName  数据库类型。
    * created  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。其中，T指某个时间的开始；Z指时区偏移量
    * updated  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。其中，T指某个时间的开始；Z指时区偏移量
    * parameters  参数对象，用户基于默认参数模板自定义的参数配置。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'datastoreVersion' => 'string',
            'datastoreName' => 'string',
            'created' => 'string',
            'updated' => 'string',
            'parameters' => '\HuaweiCloud\SDK\Dds\V3\Model\EntityConfigurationParametersResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * datastoreVersion  数据库版本。
    * datastoreName  数据库类型。
    * created  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。其中，T指某个时间的开始；Z指时区偏移量
    * updated  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。其中，T指某个时间的开始；Z指时区偏移量
    * parameters  参数对象，用户基于默认参数模板自定义的参数配置。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'datastoreVersion' => null,
        'datastoreName' => null,
        'created' => null,
        'updated' => null,
        'parameters' => null
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
    * datastoreVersion  数据库版本。
    * datastoreName  数据库类型。
    * created  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。其中，T指某个时间的开始；Z指时区偏移量
    * updated  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。其中，T指某个时间的开始；Z指时区偏移量
    * parameters  参数对象，用户基于默认参数模板自定义的参数配置。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'datastoreVersion' => 'datastore_version',
            'datastoreName' => 'datastore_name',
            'created' => 'created',
            'updated' => 'updated',
            'parameters' => 'parameters'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * datastoreVersion  数据库版本。
    * datastoreName  数据库类型。
    * created  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。其中，T指某个时间的开始；Z指时区偏移量
    * updated  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。其中，T指某个时间的开始；Z指时区偏移量
    * parameters  参数对象，用户基于默认参数模板自定义的参数配置。
    *
    * @var string[]
    */
    protected static $setters = [
            'datastoreVersion' => 'setDatastoreVersion',
            'datastoreName' => 'setDatastoreName',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'parameters' => 'setParameters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * datastoreVersion  数据库版本。
    * datastoreName  数据库类型。
    * created  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。其中，T指某个时间的开始；Z指时区偏移量
    * updated  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。其中，T指某个时间的开始；Z指时区偏移量
    * parameters  参数对象，用户基于默认参数模板自定义的参数配置。
    *
    * @var string[]
    */
    protected static $getters = [
            'datastoreVersion' => 'getDatastoreVersion',
            'datastoreName' => 'getDatastoreName',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'parameters' => 'getParameters'
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
        $this->container['datastoreVersion'] = isset($data['datastoreVersion']) ? $data['datastoreVersion'] : null;
        $this->container['datastoreName'] = isset($data['datastoreName']) ? $data['datastoreName'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
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
    * Gets datastoreVersion
    *  数据库版本。
    *
    * @return string|null
    */
    public function getDatastoreVersion()
    {
        return $this->container['datastoreVersion'];
    }

    /**
    * Sets datastoreVersion
    *
    * @param string|null $datastoreVersion 数据库版本。
    *
    * @return $this
    */
    public function setDatastoreVersion($datastoreVersion)
    {
        $this->container['datastoreVersion'] = $datastoreVersion;
        return $this;
    }

    /**
    * Gets datastoreName
    *  数据库类型。
    *
    * @return string|null
    */
    public function getDatastoreName()
    {
        return $this->container['datastoreName'];
    }

    /**
    * Sets datastoreName
    *
    * @param string|null $datastoreName 数据库类型。
    *
    * @return $this
    */
    public function setDatastoreName($datastoreName)
    {
        $this->container['datastoreName'] = $datastoreName;
        return $this;
    }

    /**
    * Gets created
    *  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。其中，T指某个时间的开始；Z指时区偏移量
    *
    * @return string|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string|null $created 创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。其中，T指某个时间的开始；Z指时区偏移量
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets updated
    *  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。其中，T指某个时间的开始；Z指时区偏移量
    *
    * @return string|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string|null $updated 更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。其中，T指某个时间的开始；Z指时区偏移量
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets parameters
    *  参数对象，用户基于默认参数模板自定义的参数配置。
    *
    * @return \HuaweiCloud\SDK\Dds\V3\Model\EntityConfigurationParametersResult[]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\Dds\V3\Model\EntityConfigurationParametersResult[]|null $parameters 参数对象，用户基于默认参数模板自定义的参数配置。
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
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

