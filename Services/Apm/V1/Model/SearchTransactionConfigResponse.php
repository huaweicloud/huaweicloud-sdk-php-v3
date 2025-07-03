<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchTransactionConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchTransactionConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * transactionConfigItemList  URL跟踪视图配置列表。
    * totalPage  总页数。
    * totalCount  总配置数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'transactionConfigItemList' => '\HuaweiCloud\SDK\Apm\V1\Model\TransactionConfigItem[]',
            'totalPage' => 'int',
            'totalCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * transactionConfigItemList  URL跟踪视图配置列表。
    * totalPage  总页数。
    * totalCount  总配置数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'transactionConfigItemList' => null,
        'totalPage' => 'int32',
        'totalCount' => 'int32'
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
    * transactionConfigItemList  URL跟踪视图配置列表。
    * totalPage  总页数。
    * totalCount  总配置数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'transactionConfigItemList' => 'transaction_config_item_list',
            'totalPage' => 'total_page',
            'totalCount' => 'total_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * transactionConfigItemList  URL跟踪视图配置列表。
    * totalPage  总页数。
    * totalCount  总配置数。
    *
    * @var string[]
    */
    protected static $setters = [
            'transactionConfigItemList' => 'setTransactionConfigItemList',
            'totalPage' => 'setTotalPage',
            'totalCount' => 'setTotalCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * transactionConfigItemList  URL跟踪视图配置列表。
    * totalPage  总页数。
    * totalCount  总配置数。
    *
    * @var string[]
    */
    protected static $getters = [
            'transactionConfigItemList' => 'getTransactionConfigItemList',
            'totalPage' => 'getTotalPage',
            'totalCount' => 'getTotalCount'
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
        $this->container['transactionConfigItemList'] = isset($data['transactionConfigItemList']) ? $data['transactionConfigItemList'] : null;
        $this->container['totalPage'] = isset($data['totalPage']) ? $data['totalPage'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
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
    * Gets transactionConfigItemList
    *  URL跟踪视图配置列表。
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\TransactionConfigItem[]|null
    */
    public function getTransactionConfigItemList()
    {
        return $this->container['transactionConfigItemList'];
    }

    /**
    * Sets transactionConfigItemList
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\TransactionConfigItem[]|null $transactionConfigItemList URL跟踪视图配置列表。
    *
    * @return $this
    */
    public function setTransactionConfigItemList($transactionConfigItemList)
    {
        $this->container['transactionConfigItemList'] = $transactionConfigItemList;
        return $this;
    }

    /**
    * Gets totalPage
    *  总页数。
    *
    * @return int|null
    */
    public function getTotalPage()
    {
        return $this->container['totalPage'];
    }

    /**
    * Sets totalPage
    *
    * @param int|null $totalPage 总页数。
    *
    * @return $this
    */
    public function setTotalPage($totalPage)
    {
        $this->container['totalPage'] = $totalPage;
        return $this;
    }

    /**
    * Gets totalCount
    *  总配置数。
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 总配置数。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
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

