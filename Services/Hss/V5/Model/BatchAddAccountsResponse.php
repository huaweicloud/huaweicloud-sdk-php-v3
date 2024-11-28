<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchAddAccountsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchAddAccountsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isAllLegalCount  批量添加账号结果   - true ：成功   - false ：失败
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isAllLegalCount' => 'bool',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isAllLegalCount  批量添加账号结果   - true ：成功   - false ：失败
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isAllLegalCount' => null,
        'xRequestId' => null
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
    * isAllLegalCount  批量添加账号结果   - true ：成功   - false ：失败
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isAllLegalCount' => 'is_all_legal_count',
            'xRequestId' => 'X-request-id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isAllLegalCount  批量添加账号结果   - true ：成功   - false ：失败
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'isAllLegalCount' => 'setIsAllLegalCount',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isAllLegalCount  批量添加账号结果   - true ：成功   - false ：失败
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'isAllLegalCount' => 'getIsAllLegalCount',
            'xRequestId' => 'getXRequestId'
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
        $this->container['isAllLegalCount'] = isset($data['isAllLegalCount']) ? $data['isAllLegalCount'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
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
    * Gets isAllLegalCount
    *  批量添加账号结果   - true ：成功   - false ：失败
    *
    * @return bool|null
    */
    public function getIsAllLegalCount()
    {
        return $this->container['isAllLegalCount'];
    }

    /**
    * Sets isAllLegalCount
    *
    * @param bool|null $isAllLegalCount 批量添加账号结果   - true ：成功   - false ：失败
    *
    * @return $this
    */
    public function setIsAllLegalCount($isAllLegalCount)
    {
        $this->container['isAllLegalCount'] = $isAllLegalCount;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

