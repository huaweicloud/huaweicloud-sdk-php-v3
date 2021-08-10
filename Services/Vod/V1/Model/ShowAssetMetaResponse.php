<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAssetMetaResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAssetMetaResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetInfoArray  媒资信息列表。
    * isTruncated  列表是否被截断。  取值如下： - 1：表示本次查询未返回全部结果。 - 0：表示本次查询已经返回了全部结果。
    * total  查询媒资总数。  > 暂只能统计2万个媒资，若您需要查询具体的媒资总数，请[提交工单](https://console.huaweicloud.com/ticket/?#/ticketindex/business?productTypeId=462902cc39a04ab3a429df872021f970)申请。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetInfoArray' => '\HuaweiCloud\SDK\Vod\V1\Model\AssetInfo[]',
            'isTruncated' => 'int',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetInfoArray  媒资信息列表。
    * isTruncated  列表是否被截断。  取值如下： - 1：表示本次查询未返回全部结果。 - 0：表示本次查询已经返回了全部结果。
    * total  查询媒资总数。  > 暂只能统计2万个媒资，若您需要查询具体的媒资总数，请[提交工单](https://console.huaweicloud.com/ticket/?#/ticketindex/business?productTypeId=462902cc39a04ab3a429df872021f970)申请。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetInfoArray' => null,
        'isTruncated' => null,
        'total' => null
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
    * assetInfoArray  媒资信息列表。
    * isTruncated  列表是否被截断。  取值如下： - 1：表示本次查询未返回全部结果。 - 0：表示本次查询已经返回了全部结果。
    * total  查询媒资总数。  > 暂只能统计2万个媒资，若您需要查询具体的媒资总数，请[提交工单](https://console.huaweicloud.com/ticket/?#/ticketindex/business?productTypeId=462902cc39a04ab3a429df872021f970)申请。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetInfoArray' => 'asset_info_array',
            'isTruncated' => 'is_truncated',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetInfoArray  媒资信息列表。
    * isTruncated  列表是否被截断。  取值如下： - 1：表示本次查询未返回全部结果。 - 0：表示本次查询已经返回了全部结果。
    * total  查询媒资总数。  > 暂只能统计2万个媒资，若您需要查询具体的媒资总数，请[提交工单](https://console.huaweicloud.com/ticket/?#/ticketindex/business?productTypeId=462902cc39a04ab3a429df872021f970)申请。
    *
    * @var string[]
    */
    protected static $setters = [
            'assetInfoArray' => 'setAssetInfoArray',
            'isTruncated' => 'setIsTruncated',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetInfoArray  媒资信息列表。
    * isTruncated  列表是否被截断。  取值如下： - 1：表示本次查询未返回全部结果。 - 0：表示本次查询已经返回了全部结果。
    * total  查询媒资总数。  > 暂只能统计2万个媒资，若您需要查询具体的媒资总数，请[提交工单](https://console.huaweicloud.com/ticket/?#/ticketindex/business?productTypeId=462902cc39a04ab3a429df872021f970)申请。
    *
    * @var string[]
    */
    protected static $getters = [
            'assetInfoArray' => 'getAssetInfoArray',
            'isTruncated' => 'getIsTruncated',
            'total' => 'getTotal'
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
        $this->container['assetInfoArray'] = isset($data['assetInfoArray']) ? $data['assetInfoArray'] : null;
        $this->container['isTruncated'] = isset($data['isTruncated']) ? $data['isTruncated'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
    * Gets assetInfoArray
    *  媒资信息列表。
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\AssetInfo[]|null
    */
    public function getAssetInfoArray()
    {
        return $this->container['assetInfoArray'];
    }

    /**
    * Sets assetInfoArray
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\AssetInfo[]|null $assetInfoArray 媒资信息列表。
    *
    * @return $this
    */
    public function setAssetInfoArray($assetInfoArray)
    {
        $this->container['assetInfoArray'] = $assetInfoArray;
        return $this;
    }

    /**
    * Gets isTruncated
    *  列表是否被截断。  取值如下： - 1：表示本次查询未返回全部结果。 - 0：表示本次查询已经返回了全部结果。
    *
    * @return int|null
    */
    public function getIsTruncated()
    {
        return $this->container['isTruncated'];
    }

    /**
    * Sets isTruncated
    *
    * @param int|null $isTruncated 列表是否被截断。  取值如下： - 1：表示本次查询未返回全部结果。 - 0：表示本次查询已经返回了全部结果。
    *
    * @return $this
    */
    public function setIsTruncated($isTruncated)
    {
        $this->container['isTruncated'] = $isTruncated;
        return $this;
    }

    /**
    * Gets total
    *  查询媒资总数。  > 暂只能统计2万个媒资，若您需要查询具体的媒资总数，请[提交工单](https://console.huaweicloud.com/ticket/?#/ticketindex/business?productTypeId=462902cc39a04ab3a429df872021f970)申请。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 查询媒资总数。  > 暂只能统计2万个媒资，若您需要查询具体的媒资总数，请[提交工单](https://console.huaweicloud.com/ticket/?#/ticketindex/business?productTypeId=462902cc39a04ab3a429df872021f970)申请。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

