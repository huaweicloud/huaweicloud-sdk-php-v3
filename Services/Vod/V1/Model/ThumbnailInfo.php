<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ThumbnailInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ThumbnailInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sample  视频截图信息。
    * dots  dots
    * execDesc  执行情况描述。
    * thumbnailStatus  截图状态。  取值如下： - UN_THUMBNAIL：未截图 - THUMBNAILING：截图中 - THUMBNAIL_SUCCEED：截图成功 - THUMBNAIL_FAILED：截图失败
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sample' => '\HuaweiCloud\SDK\Vod\V1\Model\ThumbnailRsp[]',
            'dots' => '\HuaweiCloud\SDK\Vod\V1\Model\ThumbnailRsp[]',
            'execDesc' => 'string',
            'thumbnailStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sample  视频截图信息。
    * dots  dots
    * execDesc  执行情况描述。
    * thumbnailStatus  截图状态。  取值如下： - UN_THUMBNAIL：未截图 - THUMBNAILING：截图中 - THUMBNAIL_SUCCEED：截图成功 - THUMBNAIL_FAILED：截图失败
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sample' => null,
        'dots' => null,
        'execDesc' => null,
        'thumbnailStatus' => null
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
    * sample  视频截图信息。
    * dots  dots
    * execDesc  执行情况描述。
    * thumbnailStatus  截图状态。  取值如下： - UN_THUMBNAIL：未截图 - THUMBNAILING：截图中 - THUMBNAIL_SUCCEED：截图成功 - THUMBNAIL_FAILED：截图失败
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sample' => 'sample',
            'dots' => 'dots',
            'execDesc' => 'exec_desc',
            'thumbnailStatus' => 'thumbnail_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sample  视频截图信息。
    * dots  dots
    * execDesc  执行情况描述。
    * thumbnailStatus  截图状态。  取值如下： - UN_THUMBNAIL：未截图 - THUMBNAILING：截图中 - THUMBNAIL_SUCCEED：截图成功 - THUMBNAIL_FAILED：截图失败
    *
    * @var string[]
    */
    protected static $setters = [
            'sample' => 'setSample',
            'dots' => 'setDots',
            'execDesc' => 'setExecDesc',
            'thumbnailStatus' => 'setThumbnailStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sample  视频截图信息。
    * dots  dots
    * execDesc  执行情况描述。
    * thumbnailStatus  截图状态。  取值如下： - UN_THUMBNAIL：未截图 - THUMBNAILING：截图中 - THUMBNAIL_SUCCEED：截图成功 - THUMBNAIL_FAILED：截图失败
    *
    * @var string[]
    */
    protected static $getters = [
            'sample' => 'getSample',
            'dots' => 'getDots',
            'execDesc' => 'getExecDesc',
            'thumbnailStatus' => 'getThumbnailStatus'
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
        $this->container['sample'] = isset($data['sample']) ? $data['sample'] : null;
        $this->container['dots'] = isset($data['dots']) ? $data['dots'] : null;
        $this->container['execDesc'] = isset($data['execDesc']) ? $data['execDesc'] : null;
        $this->container['thumbnailStatus'] = isset($data['thumbnailStatus']) ? $data['thumbnailStatus'] : null;
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
    * Gets sample
    *  视频截图信息。
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ThumbnailRsp[]|null
    */
    public function getSample()
    {
        return $this->container['sample'];
    }

    /**
    * Sets sample
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ThumbnailRsp[]|null $sample 视频截图信息。
    *
    * @return $this
    */
    public function setSample($sample)
    {
        $this->container['sample'] = $sample;
        return $this;
    }

    /**
    * Gets dots
    *  dots
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ThumbnailRsp[]|null
    */
    public function getDots()
    {
        return $this->container['dots'];
    }

    /**
    * Sets dots
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ThumbnailRsp[]|null $dots dots
    *
    * @return $this
    */
    public function setDots($dots)
    {
        $this->container['dots'] = $dots;
        return $this;
    }

    /**
    * Gets execDesc
    *  执行情况描述。
    *
    * @return string|null
    */
    public function getExecDesc()
    {
        return $this->container['execDesc'];
    }

    /**
    * Sets execDesc
    *
    * @param string|null $execDesc 执行情况描述。
    *
    * @return $this
    */
    public function setExecDesc($execDesc)
    {
        $this->container['execDesc'] = $execDesc;
        return $this;
    }

    /**
    * Gets thumbnailStatus
    *  截图状态。  取值如下： - UN_THUMBNAIL：未截图 - THUMBNAILING：截图中 - THUMBNAIL_SUCCEED：截图成功 - THUMBNAIL_FAILED：截图失败
    *
    * @return string|null
    */
    public function getThumbnailStatus()
    {
        return $this->container['thumbnailStatus'];
    }

    /**
    * Sets thumbnailStatus
    *
    * @param string|null $thumbnailStatus 截图状态。  取值如下： - UN_THUMBNAIL：未截图 - THUMBNAILING：截图中 - THUMBNAIL_SUCCEED：截图成功 - THUMBNAIL_FAILED：截图失败
    *
    * @return $this
    */
    public function setThumbnailStatus($thumbnailStatus)
    {
        $this->container['thumbnailStatus'] = $thumbnailStatus;
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

