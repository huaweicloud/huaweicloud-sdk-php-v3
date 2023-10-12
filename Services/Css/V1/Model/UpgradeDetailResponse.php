<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpgradeDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpgradeDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalSize  下发执行接口次数。
    * detailList  detailList
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalSize' => 'int',
            'detailList' => '\HuaweiCloud\SDK\Css\V1\Model\GetUpgradeDetailInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalSize  下发执行接口次数。
    * detailList  detailList
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalSize' => null,
        'detailList' => null
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
    * totalSize  下发执行接口次数。
    * detailList  detailList
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalSize' => 'totalSize',
            'detailList' => 'detailList'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalSize  下发执行接口次数。
    * detailList  detailList
    *
    * @var string[]
    */
    protected static $setters = [
            'totalSize' => 'setTotalSize',
            'detailList' => 'setDetailList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalSize  下发执行接口次数。
    * detailList  detailList
    *
    * @var string[]
    */
    protected static $getters = [
            'totalSize' => 'getTotalSize',
            'detailList' => 'getDetailList'
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
        $this->container['totalSize'] = isset($data['totalSize']) ? $data['totalSize'] : null;
        $this->container['detailList'] = isset($data['detailList']) ? $data['detailList'] : null;
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
    * Gets totalSize
    *  下发执行接口次数。
    *
    * @return int|null
    */
    public function getTotalSize()
    {
        return $this->container['totalSize'];
    }

    /**
    * Sets totalSize
    *
    * @param int|null $totalSize 下发执行接口次数。
    *
    * @return $this
    */
    public function setTotalSize($totalSize)
    {
        $this->container['totalSize'] = $totalSize;
        return $this;
    }

    /**
    * Gets detailList
    *  detailList
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\GetUpgradeDetailInfo[]|null
    */
    public function getDetailList()
    {
        return $this->container['detailList'];
    }

    /**
    * Sets detailList
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\GetUpgradeDetailInfo[]|null $detailList detailList
    *
    * @return $this
    */
    public function setDetailList($detailList)
    {
        $this->container['detailList'] = $detailList;
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

