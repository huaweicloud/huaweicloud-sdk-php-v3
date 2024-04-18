<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProxyTransactionSplitRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProxyTransactionSplitRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * transactionSplit  开启/关闭事务拆分，取值范围是[ON/OFF]
    * proxyIdList  实例的数据库代理列表，仅支持单proxy使用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'transactionSplit' => 'string',
            'proxyIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * transactionSplit  开启/关闭事务拆分，取值范围是[ON/OFF]
    * proxyIdList  实例的数据库代理列表，仅支持单proxy使用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'transactionSplit' => null,
        'proxyIdList' => null
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
    * transactionSplit  开启/关闭事务拆分，取值范围是[ON/OFF]
    * proxyIdList  实例的数据库代理列表，仅支持单proxy使用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'transactionSplit' => 'transaction_split',
            'proxyIdList' => 'proxy_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * transactionSplit  开启/关闭事务拆分，取值范围是[ON/OFF]
    * proxyIdList  实例的数据库代理列表，仅支持单proxy使用。
    *
    * @var string[]
    */
    protected static $setters = [
            'transactionSplit' => 'setTransactionSplit',
            'proxyIdList' => 'setProxyIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * transactionSplit  开启/关闭事务拆分，取值范围是[ON/OFF]
    * proxyIdList  实例的数据库代理列表，仅支持单proxy使用。
    *
    * @var string[]
    */
    protected static $getters = [
            'transactionSplit' => 'getTransactionSplit',
            'proxyIdList' => 'getProxyIdList'
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
        $this->container['transactionSplit'] = isset($data['transactionSplit']) ? $data['transactionSplit'] : null;
        $this->container['proxyIdList'] = isset($data['proxyIdList']) ? $data['proxyIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['transactionSplit'] === null) {
            $invalidProperties[] = "'transactionSplit' can't be null";
        }
        if ($this->container['proxyIdList'] === null) {
            $invalidProperties[] = "'proxyIdList' can't be null";
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
    * Gets transactionSplit
    *  开启/关闭事务拆分，取值范围是[ON/OFF]
    *
    * @return string
    */
    public function getTransactionSplit()
    {
        return $this->container['transactionSplit'];
    }

    /**
    * Sets transactionSplit
    *
    * @param string $transactionSplit 开启/关闭事务拆分，取值范围是[ON/OFF]
    *
    * @return $this
    */
    public function setTransactionSplit($transactionSplit)
    {
        $this->container['transactionSplit'] = $transactionSplit;
        return $this;
    }

    /**
    * Gets proxyIdList
    *  实例的数据库代理列表，仅支持单proxy使用。
    *
    * @return string[]
    */
    public function getProxyIdList()
    {
        return $this->container['proxyIdList'];
    }

    /**
    * Sets proxyIdList
    *
    * @param string[] $proxyIdList 实例的数据库代理列表，仅支持单proxy使用。
    *
    * @return $this
    */
    public function setProxyIdList($proxyIdList)
    {
        $this->container['proxyIdList'] = $proxyIdList;
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

