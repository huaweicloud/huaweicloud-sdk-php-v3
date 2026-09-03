<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportExportObsObjectsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportExportObsObjectsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bucketName  OBS桶名
    * marker  列举桶内对象列表时，指定一个标识符，作为列举时的起始位置
    * nextMarker  如果本次没有返回全部结果，响应请求中将包含此字段，用于标明本次请求列举到的最后一个对象
    * truncated  表明本次请求是否返回了全部结果
    * maxKeys  列举对象的最大数目
    * prefix  列举桶内对象列表时，指定一个前缀
    * commonPrefixes  分组信息
    * contents  对象的元数据信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucketName' => 'string',
            'marker' => 'string',
            'nextMarker' => 'string',
            'truncated' => 'bool',
            'maxKeys' => 'int',
            'prefix' => 'string',
            'commonPrefixes' => 'string[]',
            'contents' => '\HuaweiCloud\SDK\Das\V3\Model\ObsObjectInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bucketName  OBS桶名
    * marker  列举桶内对象列表时，指定一个标识符，作为列举时的起始位置
    * nextMarker  如果本次没有返回全部结果，响应请求中将包含此字段，用于标明本次请求列举到的最后一个对象
    * truncated  表明本次请求是否返回了全部结果
    * maxKeys  列举对象的最大数目
    * prefix  列举桶内对象列表时，指定一个前缀
    * commonPrefixes  分组信息
    * contents  对象的元数据信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bucketName' => null,
        'marker' => null,
        'nextMarker' => null,
        'truncated' => null,
        'maxKeys' => 'int32',
        'prefix' => null,
        'commonPrefixes' => null,
        'contents' => null
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
    * bucketName  OBS桶名
    * marker  列举桶内对象列表时，指定一个标识符，作为列举时的起始位置
    * nextMarker  如果本次没有返回全部结果，响应请求中将包含此字段，用于标明本次请求列举到的最后一个对象
    * truncated  表明本次请求是否返回了全部结果
    * maxKeys  列举对象的最大数目
    * prefix  列举桶内对象列表时，指定一个前缀
    * commonPrefixes  分组信息
    * contents  对象的元数据信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucketName' => 'bucket_name',
            'marker' => 'marker',
            'nextMarker' => 'next_marker',
            'truncated' => 'truncated',
            'maxKeys' => 'max_keys',
            'prefix' => 'prefix',
            'commonPrefixes' => 'common_prefixes',
            'contents' => 'contents'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bucketName  OBS桶名
    * marker  列举桶内对象列表时，指定一个标识符，作为列举时的起始位置
    * nextMarker  如果本次没有返回全部结果，响应请求中将包含此字段，用于标明本次请求列举到的最后一个对象
    * truncated  表明本次请求是否返回了全部结果
    * maxKeys  列举对象的最大数目
    * prefix  列举桶内对象列表时，指定一个前缀
    * commonPrefixes  分组信息
    * contents  对象的元数据信息
    *
    * @var string[]
    */
    protected static $setters = [
            'bucketName' => 'setBucketName',
            'marker' => 'setMarker',
            'nextMarker' => 'setNextMarker',
            'truncated' => 'setTruncated',
            'maxKeys' => 'setMaxKeys',
            'prefix' => 'setPrefix',
            'commonPrefixes' => 'setCommonPrefixes',
            'contents' => 'setContents'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bucketName  OBS桶名
    * marker  列举桶内对象列表时，指定一个标识符，作为列举时的起始位置
    * nextMarker  如果本次没有返回全部结果，响应请求中将包含此字段，用于标明本次请求列举到的最后一个对象
    * truncated  表明本次请求是否返回了全部结果
    * maxKeys  列举对象的最大数目
    * prefix  列举桶内对象列表时，指定一个前缀
    * commonPrefixes  分组信息
    * contents  对象的元数据信息
    *
    * @var string[]
    */
    protected static $getters = [
            'bucketName' => 'getBucketName',
            'marker' => 'getMarker',
            'nextMarker' => 'getNextMarker',
            'truncated' => 'getTruncated',
            'maxKeys' => 'getMaxKeys',
            'prefix' => 'getPrefix',
            'commonPrefixes' => 'getCommonPrefixes',
            'contents' => 'getContents'
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
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['nextMarker'] = isset($data['nextMarker']) ? $data['nextMarker'] : null;
        $this->container['truncated'] = isset($data['truncated']) ? $data['truncated'] : null;
        $this->container['maxKeys'] = isset($data['maxKeys']) ? $data['maxKeys'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['commonPrefixes'] = isset($data['commonPrefixes']) ? $data['commonPrefixes'] : null;
        $this->container['contents'] = isset($data['contents']) ? $data['contents'] : null;
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
    * Gets bucketName
    *  OBS桶名
    *
    * @return string|null
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string|null $bucketName OBS桶名
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets marker
    *  列举桶内对象列表时，指定一个标识符，作为列举时的起始位置
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
    * @param string|null $marker 列举桶内对象列表时，指定一个标识符，作为列举时的起始位置
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets nextMarker
    *  如果本次没有返回全部结果，响应请求中将包含此字段，用于标明本次请求列举到的最后一个对象
    *
    * @return string|null
    */
    public function getNextMarker()
    {
        return $this->container['nextMarker'];
    }

    /**
    * Sets nextMarker
    *
    * @param string|null $nextMarker 如果本次没有返回全部结果，响应请求中将包含此字段，用于标明本次请求列举到的最后一个对象
    *
    * @return $this
    */
    public function setNextMarker($nextMarker)
    {
        $this->container['nextMarker'] = $nextMarker;
        return $this;
    }

    /**
    * Gets truncated
    *  表明本次请求是否返回了全部结果
    *
    * @return bool|null
    */
    public function getTruncated()
    {
        return $this->container['truncated'];
    }

    /**
    * Sets truncated
    *
    * @param bool|null $truncated 表明本次请求是否返回了全部结果
    *
    * @return $this
    */
    public function setTruncated($truncated)
    {
        $this->container['truncated'] = $truncated;
        return $this;
    }

    /**
    * Gets maxKeys
    *  列举对象的最大数目
    *
    * @return int|null
    */
    public function getMaxKeys()
    {
        return $this->container['maxKeys'];
    }

    /**
    * Sets maxKeys
    *
    * @param int|null $maxKeys 列举对象的最大数目
    *
    * @return $this
    */
    public function setMaxKeys($maxKeys)
    {
        $this->container['maxKeys'] = $maxKeys;
        return $this;
    }

    /**
    * Gets prefix
    *  列举桶内对象列表时，指定一个前缀
    *
    * @return string|null
    */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
    * Sets prefix
    *
    * @param string|null $prefix 列举桶内对象列表时，指定一个前缀
    *
    * @return $this
    */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;
        return $this;
    }

    /**
    * Gets commonPrefixes
    *  分组信息
    *
    * @return string[]|null
    */
    public function getCommonPrefixes()
    {
        return $this->container['commonPrefixes'];
    }

    /**
    * Sets commonPrefixes
    *
    * @param string[]|null $commonPrefixes 分组信息
    *
    * @return $this
    */
    public function setCommonPrefixes($commonPrefixes)
    {
        $this->container['commonPrefixes'] = $commonPrefixes;
        return $this;
    }

    /**
    * Gets contents
    *  对象的元数据信息
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\ObsObjectInfo[]|null
    */
    public function getContents()
    {
        return $this->container['contents'];
    }

    /**
    * Sets contents
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\ObsObjectInfo[]|null $contents 对象的元数据信息
    *
    * @return $this
    */
    public function setContents($contents)
    {
        $this->container['contents'] = $contents;
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

