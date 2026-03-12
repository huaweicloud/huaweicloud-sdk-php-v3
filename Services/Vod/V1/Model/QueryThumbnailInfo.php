<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryThumbnailInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryThumbnailInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  截图任务
    * thumbnailPara  thumbnailPara
    * thumbnailCount  视频截图个数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'thumbnailPara' => '\HuaweiCloud\SDK\Vod\V1\Model\Thumbnail',
            'thumbnailCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  截图任务
    * thumbnailPara  thumbnailPara
    * thumbnailCount  视频截图个数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'thumbnailPara' => null,
        'thumbnailCount' => 'int32'
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
    * taskId  截图任务
    * thumbnailPara  thumbnailPara
    * thumbnailCount  视频截图个数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'thumbnailPara' => 'thumbnail_para',
            'thumbnailCount' => 'thumbnail_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  截图任务
    * thumbnailPara  thumbnailPara
    * thumbnailCount  视频截图个数。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'thumbnailPara' => 'setThumbnailPara',
            'thumbnailCount' => 'setThumbnailCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  截图任务
    * thumbnailPara  thumbnailPara
    * thumbnailCount  视频截图个数。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'thumbnailPara' => 'getThumbnailPara',
            'thumbnailCount' => 'getThumbnailCount'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['thumbnailPara'] = isset($data['thumbnailPara']) ? $data['thumbnailPara'] : null;
        $this->container['thumbnailCount'] = isset($data['thumbnailCount']) ? $data['thumbnailCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['thumbnailCount']) && ($this->container['thumbnailCount'] > 20480)) {
                $invalidProperties[] = "invalid value for 'thumbnailCount', must be smaller than or equal to 20480.";
            }
            if (!is_null($this->container['thumbnailCount']) && ($this->container['thumbnailCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'thumbnailCount', must be bigger than or equal to 0.";
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
    * Gets taskId
    *  截图任务
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 截图任务
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets thumbnailPara
    *  thumbnailPara
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\Thumbnail|null
    */
    public function getThumbnailPara()
    {
        return $this->container['thumbnailPara'];
    }

    /**
    * Sets thumbnailPara
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\Thumbnail|null $thumbnailPara thumbnailPara
    *
    * @return $this
    */
    public function setThumbnailPara($thumbnailPara)
    {
        $this->container['thumbnailPara'] = $thumbnailPara;
        return $this;
    }

    /**
    * Gets thumbnailCount
    *  视频截图个数。
    *
    * @return int|null
    */
    public function getThumbnailCount()
    {
        return $this->container['thumbnailCount'];
    }

    /**
    * Sets thumbnailCount
    *
    * @param int|null $thumbnailCount 视频截图个数。
    *
    * @return $this
    */
    public function setThumbnailCount($thumbnailCount)
    {
        $this->container['thumbnailCount'] = $thumbnailCount;
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

