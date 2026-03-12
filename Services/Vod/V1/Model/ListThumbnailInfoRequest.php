<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListThumbnailInfoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListThumbnailInfoRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * assetId  截图对应媒资id的截图，只支持单个媒资。
    * taskId  截图对应的任务id，只支持单个任务查询。
    * offset  查询偏移量。取值范围[0,20000]，默认值：0。
    * limit  查询一页返回数。取值范围[1,100]，默认值：10。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xSdkDate' => 'string',
            'assetId' => 'string',
            'taskId' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * assetId  截图对应媒资id的截图，只支持单个媒资。
    * taskId  截图对应的任务id，只支持单个任务查询。
    * offset  查询偏移量。取值范围[0,20000]，默认值：0。
    * limit  查询一页返回数。取值范围[1,100]，默认值：10。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xSdkDate' => null,
        'assetId' => null,
        'taskId' => null,
        'offset' => null,
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
    * assetId  截图对应媒资id的截图，只支持单个媒资。
    * taskId  截图对应的任务id，只支持单个任务查询。
    * offset  查询偏移量。取值范围[0,20000]，默认值：0。
    * limit  查询一页返回数。取值范围[1,100]，默认值：10。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xSdkDate' => 'X-Sdk-Date',
            'assetId' => 'asset_id',
            'taskId' => 'task_id',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * assetId  截图对应媒资id的截图，只支持单个媒资。
    * taskId  截图对应的任务id，只支持单个任务查询。
    * offset  查询偏移量。取值范围[0,20000]，默认值：0。
    * limit  查询一页返回数。取值范围[1,100]，默认值：10。
    *
    * @var string[]
    */
    protected static $setters = [
            'xSdkDate' => 'setXSdkDate',
            'assetId' => 'setAssetId',
            'taskId' => 'setTaskId',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * assetId  截图对应媒资id的截图，只支持单个媒资。
    * taskId  截图对应的任务id，只支持单个任务查询。
    * offset  查询偏移量。取值范围[0,20000]，默认值：0。
    * limit  查询一页返回数。取值范围[1,100]，默认值：10。
    *
    * @var string[]
    */
    protected static $getters = [
            'xSdkDate' => 'getXSdkDate',
            'assetId' => 'getAssetId',
            'taskId' => 'getTaskId',
            'offset' => 'getOffset',
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
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
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
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 20000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 20000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets assetId
    *  截图对应媒资id的截图，只支持单个媒资。
    *
    * @return string|null
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string|null $assetId 截图对应媒资id的截图，只支持单个媒资。
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets taskId
    *  截图对应的任务id，只支持单个任务查询。
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
    * @param string|null $taskId 截图对应的任务id，只支持单个任务查询。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets offset
    *  查询偏移量。取值范围[0,20000]，默认值：0。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 查询偏移量。取值范围[0,20000]，默认值：0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  查询一页返回数。取值范围[1,100]，默认值：10。
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
    * @param int|null $limit 查询一页返回数。取值范围[1,100]，默认值：10。
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

