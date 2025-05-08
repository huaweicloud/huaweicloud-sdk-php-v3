<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowObjectMetaDataRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowObjectMetaDataRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * bucket  obs桶名称
    * object  obs对象路径
    * marker  列举桶内对象列表时，指定一个标识符，作为列举时的起始位置，从该标识符以后按对象名的字典顺序返回对象列表
    * limit  列举对象的最大数目，返回的对象列表将是按照字典顺序的最多前limit个对象
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xSdkDate' => 'string',
            'bucket' => 'string',
            'object' => 'string',
            'marker' => 'string',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * bucket  obs桶名称
    * object  obs对象路径
    * marker  列举桶内对象列表时，指定一个标识符，作为列举时的起始位置，从该标识符以后按对象名的字典顺序返回对象列表
    * limit  列举对象的最大数目，返回的对象列表将是按照字典顺序的最多前limit个对象
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xSdkDate' => null,
        'bucket' => null,
        'object' => null,
        'marker' => null,
        'limit' => null
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
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * bucket  obs桶名称
    * object  obs对象路径
    * marker  列举桶内对象列表时，指定一个标识符，作为列举时的起始位置，从该标识符以后按对象名的字典顺序返回对象列表
    * limit  列举对象的最大数目，返回的对象列表将是按照字典顺序的最多前limit个对象
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xSdkDate' => 'X-Sdk-Date',
            'bucket' => 'bucket',
            'object' => 'object',
            'marker' => 'marker',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * bucket  obs桶名称
    * object  obs对象路径
    * marker  列举桶内对象列表时，指定一个标识符，作为列举时的起始位置，从该标识符以后按对象名的字典顺序返回对象列表
    * limit  列举对象的最大数目，返回的对象列表将是按照字典顺序的最多前limit个对象
    *
    * @var string[]
    */
    protected static $setters = [
            'xSdkDate' => 'setXSdkDate',
            'bucket' => 'setBucket',
            'object' => 'setObject',
            'marker' => 'setMarker',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * bucket  obs桶名称
    * object  obs对象路径
    * marker  列举桶内对象列表时，指定一个标识符，作为列举时的起始位置，从该标识符以后按对象名的字典顺序返回对象列表
    * limit  列举对象的最大数目，返回的对象列表将是按照字典顺序的最多前limit个对象
    *
    * @var string[]
    */
    protected static $getters = [
            'xSdkDate' => 'getXSdkDate',
            'bucket' => 'getBucket',
            'object' => 'getObject',
            'marker' => 'getMarker',
            'limit' => 'getLimit'
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
        $this->container['xSdkDate'] = isset($data['xSdkDate']) ? $data['xSdkDate'] : null;
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['xSdkDate']) && (mb_strlen($this->container['xSdkDate']) > 256)) {
                $invalidProperties[] = "invalid value for 'xSdkDate', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['xSdkDate']) && (mb_strlen($this->container['xSdkDate']) < 1)) {
                $invalidProperties[] = "invalid value for 'xSdkDate', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['bucket'] === null) {
            $invalidProperties[] = "'bucket' can't be null";
        }
            if ((mb_strlen($this->container['bucket']) > 63)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be smaller than or equal to 63.";
            }
            if ((mb_strlen($this->container['bucket']) < 3)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['object']) && (mb_strlen($this->container['object']) > 1023)) {
                $invalidProperties[] = "invalid value for 'object', the character length must be smaller than or equal to 1023.";
            }
            if (!is_null($this->container['object']) && (mb_strlen($this->container['object']) < 0)) {
                $invalidProperties[] = "invalid value for 'object', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 1024)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 0)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets xSdkDate
    *  使用AK/SK方式认证时必选，请求的发生时间。
    *
    * @return string|null
    */
    public function getXSdkDate()
    {
        return $this->container['xSdkDate'];
    }

    /**
    * Sets xSdkDate
    *
    * @param string|null $xSdkDate 使用AK/SK方式认证时必选，请求的发生时间。
    *
    * @return $this
    */
    public function setXSdkDate($xSdkDate)
    {
        $this->container['xSdkDate'] = $xSdkDate;
        return $this;
    }

    /**
    * Gets bucket
    *  obs桶名称
    *
    * @return string
    */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
    * Sets bucket
    *
    * @param string $bucket obs桶名称
    *
    * @return $this
    */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;
        return $this;
    }

    /**
    * Gets object
    *  obs对象路径
    *
    * @return string|null
    */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
    * Sets object
    *
    * @param string|null $object obs对象路径
    *
    * @return $this
    */
    public function setObject($object)
    {
        $this->container['object'] = $object;
        return $this;
    }

    /**
    * Gets marker
    *  列举桶内对象列表时，指定一个标识符，作为列举时的起始位置，从该标识符以后按对象名的字典顺序返回对象列表
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 列举桶内对象列表时，指定一个标识符，作为列举时的起始位置，从该标识符以后按对象名的字典顺序返回对象列表
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets limit
    *  列举对象的最大数目，返回的对象列表将是按照字典顺序的最多前limit个对象
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 列举对象的最大数目，返回的对象列表将是按照字典顺序的最多前limit个对象
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

