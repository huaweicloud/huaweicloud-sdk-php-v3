<?php

namespace HuaweiCloud\SDK\Cts\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataBucket implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataBucket';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataBucketName  数据类追踪器追踪对象的桶名。 - 当启用或者停用数据类追踪器时，该参数为必选。 - 管理类追踪器无此参数。 - 追踪器一旦创建追踪桶无法修改。
    * dataEvent  数据类追踪器追踪的操作类型。 - 当启用或者停用数据类追踪器时，该参数为必选。 - 管理类追踪器无此参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataBucketName' => 'string',
            'dataEvent' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataBucketName  数据类追踪器追踪对象的桶名。 - 当启用或者停用数据类追踪器时，该参数为必选。 - 管理类追踪器无此参数。 - 追踪器一旦创建追踪桶无法修改。
    * dataEvent  数据类追踪器追踪的操作类型。 - 当启用或者停用数据类追踪器时，该参数为必选。 - 管理类追踪器无此参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataBucketName' => null,
        'dataEvent' => null
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
    * dataBucketName  数据类追踪器追踪对象的桶名。 - 当启用或者停用数据类追踪器时，该参数为必选。 - 管理类追踪器无此参数。 - 追踪器一旦创建追踪桶无法修改。
    * dataEvent  数据类追踪器追踪的操作类型。 - 当启用或者停用数据类追踪器时，该参数为必选。 - 管理类追踪器无此参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataBucketName' => 'data_bucket_name',
            'dataEvent' => 'data_event'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataBucketName  数据类追踪器追踪对象的桶名。 - 当启用或者停用数据类追踪器时，该参数为必选。 - 管理类追踪器无此参数。 - 追踪器一旦创建追踪桶无法修改。
    * dataEvent  数据类追踪器追踪的操作类型。 - 当启用或者停用数据类追踪器时，该参数为必选。 - 管理类追踪器无此参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'dataBucketName' => 'setDataBucketName',
            'dataEvent' => 'setDataEvent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataBucketName  数据类追踪器追踪对象的桶名。 - 当启用或者停用数据类追踪器时，该参数为必选。 - 管理类追踪器无此参数。 - 追踪器一旦创建追踪桶无法修改。
    * dataEvent  数据类追踪器追踪的操作类型。 - 当启用或者停用数据类追踪器时，该参数为必选。 - 管理类追踪器无此参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'dataBucketName' => 'getDataBucketName',
            'dataEvent' => 'getDataEvent'
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
    const DATA_EVENT_WRITE = 'WRITE';
    const DATA_EVENT_READ = 'READ';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDataEventAllowableValues()
    {
        return [
            self::DATA_EVENT_WRITE,
            self::DATA_EVENT_READ,
        ];
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
        $this->container['dataBucketName'] = isset($data['dataBucketName']) ? $data['dataBucketName'] : null;
        $this->container['dataEvent'] = isset($data['dataEvent']) ? $data['dataEvent'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dataBucketName']) && (mb_strlen($this->container['dataBucketName']) > 63)) {
                $invalidProperties[] = "invalid value for 'dataBucketName', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['dataBucketName']) && (mb_strlen($this->container['dataBucketName']) < 3)) {
                $invalidProperties[] = "invalid value for 'dataBucketName', the character length must be bigger than or equal to 3.";
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
    * Gets dataBucketName
    *  数据类追踪器追踪对象的桶名。 - 当启用或者停用数据类追踪器时，该参数为必选。 - 管理类追踪器无此参数。 - 追踪器一旦创建追踪桶无法修改。
    *
    * @return string|null
    */
    public function getDataBucketName()
    {
        return $this->container['dataBucketName'];
    }

    /**
    * Sets dataBucketName
    *
    * @param string|null $dataBucketName 数据类追踪器追踪对象的桶名。 - 当启用或者停用数据类追踪器时，该参数为必选。 - 管理类追踪器无此参数。 - 追踪器一旦创建追踪桶无法修改。
    *
    * @return $this
    */
    public function setDataBucketName($dataBucketName)
    {
        $this->container['dataBucketName'] = $dataBucketName;
        return $this;
    }

    /**
    * Gets dataEvent
    *  数据类追踪器追踪的操作类型。 - 当启用或者停用数据类追踪器时，该参数为必选。 - 管理类追踪器无此参数。
    *
    * @return string[]|null
    */
    public function getDataEvent()
    {
        return $this->container['dataEvent'];
    }

    /**
    * Sets dataEvent
    *
    * @param string[]|null $dataEvent 数据类追踪器追踪的操作类型。 - 当启用或者停用数据类追踪器时，该参数为必选。 - 管理类追踪器无此参数。
    *
    * @return $this
    */
    public function setDataEvent($dataEvent)
    {
        $this->container['dataEvent'] = $dataEvent;
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

