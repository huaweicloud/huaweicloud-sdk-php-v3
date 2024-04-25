<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BankReceiptDict implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BankReceiptDict';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * kvPairCount  键值对数量
    * bankReceiptLocation  银行回单的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * kvPairList  键值对识别结果列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'kvPairCount' => 'int',
            'bankReceiptLocation' => 'int[][]',
            'kvPairList' => '\HuaweiCloud\SDK\Ocr\V1\Model\BankReceiptKvPair[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * kvPairCount  键值对数量
    * bankReceiptLocation  银行回单的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * kvPairList  键值对识别结果列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'kvPairCount' => 'int32',
        'bankReceiptLocation' => 'int32',
        'kvPairList' => null
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
    * kvPairCount  键值对数量
    * bankReceiptLocation  银行回单的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * kvPairList  键值对识别结果列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'kvPairCount' => 'kv_pair_count',
            'bankReceiptLocation' => 'bank_receipt_location',
            'kvPairList' => 'kv_pair_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * kvPairCount  键值对数量
    * bankReceiptLocation  银行回单的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * kvPairList  键值对识别结果列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'kvPairCount' => 'setKvPairCount',
            'bankReceiptLocation' => 'setBankReceiptLocation',
            'kvPairList' => 'setKvPairList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * kvPairCount  键值对数量
    * bankReceiptLocation  银行回单的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * kvPairList  键值对识别结果列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'kvPairCount' => 'getKvPairCount',
            'bankReceiptLocation' => 'getBankReceiptLocation',
            'kvPairList' => 'getKvPairList'
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
        $this->container['kvPairCount'] = isset($data['kvPairCount']) ? $data['kvPairCount'] : null;
        $this->container['bankReceiptLocation'] = isset($data['bankReceiptLocation']) ? $data['bankReceiptLocation'] : null;
        $this->container['kvPairList'] = isset($data['kvPairList']) ? $data['kvPairList'] : null;
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
    * Gets kvPairCount
    *  键值对数量
    *
    * @return int|null
    */
    public function getKvPairCount()
    {
        return $this->container['kvPairCount'];
    }

    /**
    * Sets kvPairCount
    *
    * @param int|null $kvPairCount 键值对数量
    *
    * @return $this
    */
    public function setKvPairCount($kvPairCount)
    {
        $this->container['kvPairCount'] = $kvPairCount;
        return $this;
    }

    /**
    * Gets bankReceiptLocation
    *  银行回单的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return int[][]|null
    */
    public function getBankReceiptLocation()
    {
        return $this->container['bankReceiptLocation'];
    }

    /**
    * Sets bankReceiptLocation
    *
    * @param int[][]|null $bankReceiptLocation 银行回单的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return $this
    */
    public function setBankReceiptLocation($bankReceiptLocation)
    {
        $this->container['bankReceiptLocation'] = $bankReceiptLocation;
        return $this;
    }

    /**
    * Gets kvPairList
    *  键值对识别结果列表。
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\BankReceiptKvPair[]|null
    */
    public function getKvPairList()
    {
        return $this->container['kvPairList'];
    }

    /**
    * Sets kvPairList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\BankReceiptKvPair[]|null $kvPairList 键值对识别结果列表。
    *
    * @return $this
    */
    public function setKvPairList($kvPairList)
    {
        $this->container['kvPairList'] = $kvPairList;
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

