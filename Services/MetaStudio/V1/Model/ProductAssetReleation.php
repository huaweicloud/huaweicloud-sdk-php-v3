<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProductAssetReleation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProductAssetReleation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetItem  assetItem
    * textItem  textItem
    * action  添加或删除资产关联 - LINK ：将资产纳入管理 - UNLINK ：将资产移除管理
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetItem' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ProductMediaInfo',
            'textItem' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ProductTextInfo',
            'action' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetItem  assetItem
    * textItem  textItem
    * action  添加或删除资产关联 - LINK ：将资产纳入管理 - UNLINK ：将资产移除管理
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetItem' => null,
        'textItem' => null,
        'action' => null
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
    * assetItem  assetItem
    * textItem  textItem
    * action  添加或删除资产关联 - LINK ：将资产纳入管理 - UNLINK ：将资产移除管理
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetItem' => 'asset_item',
            'textItem' => 'text_item',
            'action' => 'action'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetItem  assetItem
    * textItem  textItem
    * action  添加或删除资产关联 - LINK ：将资产纳入管理 - UNLINK ：将资产移除管理
    *
    * @var string[]
    */
    protected static $setters = [
            'assetItem' => 'setAssetItem',
            'textItem' => 'setTextItem',
            'action' => 'setAction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetItem  assetItem
    * textItem  textItem
    * action  添加或删除资产关联 - LINK ：将资产纳入管理 - UNLINK ：将资产移除管理
    *
    * @var string[]
    */
    protected static $getters = [
            'assetItem' => 'getAssetItem',
            'textItem' => 'getTextItem',
            'action' => 'getAction'
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
    const ACTION_LINK = 'LINK';
    const ACTION_UNLINK = 'UNLINK';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_LINK,
            self::ACTION_UNLINK,
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
        $this->container['assetItem'] = isset($data['assetItem']) ? $data['assetItem'] : null;
        $this->container['textItem'] = isset($data['textItem']) ? $data['textItem'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) > 64)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) < 1)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 1.";
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
    * Gets assetItem
    *  assetItem
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ProductMediaInfo|null
    */
    public function getAssetItem()
    {
        return $this->container['assetItem'];
    }

    /**
    * Sets assetItem
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ProductMediaInfo|null $assetItem assetItem
    *
    * @return $this
    */
    public function setAssetItem($assetItem)
    {
        $this->container['assetItem'] = $assetItem;
        return $this;
    }

    /**
    * Gets textItem
    *  textItem
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ProductTextInfo|null
    */
    public function getTextItem()
    {
        return $this->container['textItem'];
    }

    /**
    * Sets textItem
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ProductTextInfo|null $textItem textItem
    *
    * @return $this
    */
    public function setTextItem($textItem)
    {
        $this->container['textItem'] = $textItem;
        return $this;
    }

    /**
    * Gets action
    *  添加或删除资产关联 - LINK ：将资产纳入管理 - UNLINK ：将资产移除管理
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 添加或删除资产关联 - LINK ：将资产纳入管理 - UNLINK ：将资产移除管理
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
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

