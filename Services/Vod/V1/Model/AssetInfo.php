<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssetInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssetInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetId  媒资ID。
    * status  媒资状态。  取值如下： - UNCREATED：未创建（媒资ID不存在 ） - DELETED：已删除 - CANCELLED：上传取消 - SERVER_ERROR：上传失败（点播服务端故障） - UPLOAD_FAILED：上传失败（向OBS上传失败） - CREATING：创建中 - PUBLISHED：已发布 - WAITING_TRANSCODE：待发布（转码排队中） - TRANSCODING：待发布（转码中） - TRANSCODE_FAILED：待发布（转码失败） - TRANSCODE_SUCCEED：待发布（转码成功） - CREATED：待发布（未转码） - NO_ASSET：该媒资不存在 - DELETING：正在删除 - DELETE_FAILED：删除失败 - OBS_CREATING：OBS转存方式创建中 - OBS_CREATE_FAILED： OBS转存失败 - OBS_CREATE_SUCCESS： OBS转存成功
    * description  媒资子状态或描述信息。 - 对于媒资异常场景，描述具体的异常原因。 - 对于正常场景，描述媒资的处理信息。
    * baseInfo  baseInfo
    * playInfoArray  转码文件的播放信息。 - HLS或DASH：此数组的成员个数为n+1，n为转码输出路数。 - MP4：此数组的成员个数为n，n为转码输出路数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetId' => 'string',
            'status' => 'string',
            'description' => 'string',
            'baseInfo' => '\HuaweiCloud\SDK\Vod\V1\Model\BaseInfo',
            'playInfoArray' => '\HuaweiCloud\SDK\Vod\V1\Model\PlayInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetId  媒资ID。
    * status  媒资状态。  取值如下： - UNCREATED：未创建（媒资ID不存在 ） - DELETED：已删除 - CANCELLED：上传取消 - SERVER_ERROR：上传失败（点播服务端故障） - UPLOAD_FAILED：上传失败（向OBS上传失败） - CREATING：创建中 - PUBLISHED：已发布 - WAITING_TRANSCODE：待发布（转码排队中） - TRANSCODING：待发布（转码中） - TRANSCODE_FAILED：待发布（转码失败） - TRANSCODE_SUCCEED：待发布（转码成功） - CREATED：待发布（未转码） - NO_ASSET：该媒资不存在 - DELETING：正在删除 - DELETE_FAILED：删除失败 - OBS_CREATING：OBS转存方式创建中 - OBS_CREATE_FAILED： OBS转存失败 - OBS_CREATE_SUCCESS： OBS转存成功
    * description  媒资子状态或描述信息。 - 对于媒资异常场景，描述具体的异常原因。 - 对于正常场景，描述媒资的处理信息。
    * baseInfo  baseInfo
    * playInfoArray  转码文件的播放信息。 - HLS或DASH：此数组的成员个数为n+1，n为转码输出路数。 - MP4：此数组的成员个数为n，n为转码输出路数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetId' => null,
        'status' => null,
        'description' => null,
        'baseInfo' => null,
        'playInfoArray' => null
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
    * assetId  媒资ID。
    * status  媒资状态。  取值如下： - UNCREATED：未创建（媒资ID不存在 ） - DELETED：已删除 - CANCELLED：上传取消 - SERVER_ERROR：上传失败（点播服务端故障） - UPLOAD_FAILED：上传失败（向OBS上传失败） - CREATING：创建中 - PUBLISHED：已发布 - WAITING_TRANSCODE：待发布（转码排队中） - TRANSCODING：待发布（转码中） - TRANSCODE_FAILED：待发布（转码失败） - TRANSCODE_SUCCEED：待发布（转码成功） - CREATED：待发布（未转码） - NO_ASSET：该媒资不存在 - DELETING：正在删除 - DELETE_FAILED：删除失败 - OBS_CREATING：OBS转存方式创建中 - OBS_CREATE_FAILED： OBS转存失败 - OBS_CREATE_SUCCESS： OBS转存成功
    * description  媒资子状态或描述信息。 - 对于媒资异常场景，描述具体的异常原因。 - 对于正常场景，描述媒资的处理信息。
    * baseInfo  baseInfo
    * playInfoArray  转码文件的播放信息。 - HLS或DASH：此数组的成员个数为n+1，n为转码输出路数。 - MP4：此数组的成员个数为n，n为转码输出路数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetId' => 'asset_id',
            'status' => 'status',
            'description' => 'description',
            'baseInfo' => 'base_info',
            'playInfoArray' => 'play_info_array'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetId  媒资ID。
    * status  媒资状态。  取值如下： - UNCREATED：未创建（媒资ID不存在 ） - DELETED：已删除 - CANCELLED：上传取消 - SERVER_ERROR：上传失败（点播服务端故障） - UPLOAD_FAILED：上传失败（向OBS上传失败） - CREATING：创建中 - PUBLISHED：已发布 - WAITING_TRANSCODE：待发布（转码排队中） - TRANSCODING：待发布（转码中） - TRANSCODE_FAILED：待发布（转码失败） - TRANSCODE_SUCCEED：待发布（转码成功） - CREATED：待发布（未转码） - NO_ASSET：该媒资不存在 - DELETING：正在删除 - DELETE_FAILED：删除失败 - OBS_CREATING：OBS转存方式创建中 - OBS_CREATE_FAILED： OBS转存失败 - OBS_CREATE_SUCCESS： OBS转存成功
    * description  媒资子状态或描述信息。 - 对于媒资异常场景，描述具体的异常原因。 - 对于正常场景，描述媒资的处理信息。
    * baseInfo  baseInfo
    * playInfoArray  转码文件的播放信息。 - HLS或DASH：此数组的成员个数为n+1，n为转码输出路数。 - MP4：此数组的成员个数为n，n为转码输出路数。
    *
    * @var string[]
    */
    protected static $setters = [
            'assetId' => 'setAssetId',
            'status' => 'setStatus',
            'description' => 'setDescription',
            'baseInfo' => 'setBaseInfo',
            'playInfoArray' => 'setPlayInfoArray'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetId  媒资ID。
    * status  媒资状态。  取值如下： - UNCREATED：未创建（媒资ID不存在 ） - DELETED：已删除 - CANCELLED：上传取消 - SERVER_ERROR：上传失败（点播服务端故障） - UPLOAD_FAILED：上传失败（向OBS上传失败） - CREATING：创建中 - PUBLISHED：已发布 - WAITING_TRANSCODE：待发布（转码排队中） - TRANSCODING：待发布（转码中） - TRANSCODE_FAILED：待发布（转码失败） - TRANSCODE_SUCCEED：待发布（转码成功） - CREATED：待发布（未转码） - NO_ASSET：该媒资不存在 - DELETING：正在删除 - DELETE_FAILED：删除失败 - OBS_CREATING：OBS转存方式创建中 - OBS_CREATE_FAILED： OBS转存失败 - OBS_CREATE_SUCCESS： OBS转存成功
    * description  媒资子状态或描述信息。 - 对于媒资异常场景，描述具体的异常原因。 - 对于正常场景，描述媒资的处理信息。
    * baseInfo  baseInfo
    * playInfoArray  转码文件的播放信息。 - HLS或DASH：此数组的成员个数为n+1，n为转码输出路数。 - MP4：此数组的成员个数为n，n为转码输出路数。
    *
    * @var string[]
    */
    protected static $getters = [
            'assetId' => 'getAssetId',
            'status' => 'getStatus',
            'description' => 'getDescription',
            'baseInfo' => 'getBaseInfo',
            'playInfoArray' => 'getPlayInfoArray'
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
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['baseInfo'] = isset($data['baseInfo']) ? $data['baseInfo'] : null;
        $this->container['playInfoArray'] = isset($data['playInfoArray']) ? $data['playInfoArray'] : null;
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
    * Gets assetId
    *  媒资ID。
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
    * @param string|null $assetId 媒资ID。
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets status
    *  媒资状态。  取值如下： - UNCREATED：未创建（媒资ID不存在 ） - DELETED：已删除 - CANCELLED：上传取消 - SERVER_ERROR：上传失败（点播服务端故障） - UPLOAD_FAILED：上传失败（向OBS上传失败） - CREATING：创建中 - PUBLISHED：已发布 - WAITING_TRANSCODE：待发布（转码排队中） - TRANSCODING：待发布（转码中） - TRANSCODE_FAILED：待发布（转码失败） - TRANSCODE_SUCCEED：待发布（转码成功） - CREATED：待发布（未转码） - NO_ASSET：该媒资不存在 - DELETING：正在删除 - DELETE_FAILED：删除失败 - OBS_CREATING：OBS转存方式创建中 - OBS_CREATE_FAILED： OBS转存失败 - OBS_CREATE_SUCCESS： OBS转存成功
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 媒资状态。  取值如下： - UNCREATED：未创建（媒资ID不存在 ） - DELETED：已删除 - CANCELLED：上传取消 - SERVER_ERROR：上传失败（点播服务端故障） - UPLOAD_FAILED：上传失败（向OBS上传失败） - CREATING：创建中 - PUBLISHED：已发布 - WAITING_TRANSCODE：待发布（转码排队中） - TRANSCODING：待发布（转码中） - TRANSCODE_FAILED：待发布（转码失败） - TRANSCODE_SUCCEED：待发布（转码成功） - CREATED：待发布（未转码） - NO_ASSET：该媒资不存在 - DELETING：正在删除 - DELETE_FAILED：删除失败 - OBS_CREATING：OBS转存方式创建中 - OBS_CREATE_FAILED： OBS转存失败 - OBS_CREATE_SUCCESS： OBS转存成功
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets description
    *  媒资子状态或描述信息。 - 对于媒资异常场景，描述具体的异常原因。 - 对于正常场景，描述媒资的处理信息。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 媒资子状态或描述信息。 - 对于媒资异常场景，描述具体的异常原因。 - 对于正常场景，描述媒资的处理信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets baseInfo
    *  baseInfo
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\BaseInfo|null
    */
    public function getBaseInfo()
    {
        return $this->container['baseInfo'];
    }

    /**
    * Sets baseInfo
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\BaseInfo|null $baseInfo baseInfo
    *
    * @return $this
    */
    public function setBaseInfo($baseInfo)
    {
        $this->container['baseInfo'] = $baseInfo;
        return $this;
    }

    /**
    * Gets playInfoArray
    *  转码文件的播放信息。 - HLS或DASH：此数组的成员个数为n+1，n为转码输出路数。 - MP4：此数组的成员个数为n，n为转码输出路数。
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\PlayInfo[]|null
    */
    public function getPlayInfoArray()
    {
        return $this->container['playInfoArray'];
    }

    /**
    * Sets playInfoArray
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\PlayInfo[]|null $playInfoArray 转码文件的播放信息。 - HLS或DASH：此数组的成员个数为n+1，n为转码输出路数。 - MP4：此数组的成员个数为n，n为转码输出路数。
    *
    * @return $this
    */
    public function setPlayInfoArray($playInfoArray)
    {
        $this->container['playInfoArray'] = $playInfoArray;
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

