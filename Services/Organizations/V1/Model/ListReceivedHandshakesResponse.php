<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListReceivedHandshakesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListReceivedHandshakesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * handshakes  邀请（握手）对象的列表，其中包含与指定账号关联的每个邀请（握手）的详细信息。
    * pageInfo  pageInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'handshakes' => '\HuaweiCloud\SDK\Organizations\V1\Model\HandshakeDto[]',
            'pageInfo' => '\HuaweiCloud\SDK\Organizations\V1\Model\PageInfoDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * handshakes  邀请（握手）对象的列表，其中包含与指定账号关联的每个邀请（握手）的详细信息。
    * pageInfo  pageInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'handshakes' => null,
        'pageInfo' => null
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
    * handshakes  邀请（握手）对象的列表，其中包含与指定账号关联的每个邀请（握手）的详细信息。
    * pageInfo  pageInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'handshakes' => 'handshakes',
            'pageInfo' => 'page_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * handshakes  邀请（握手）对象的列表，其中包含与指定账号关联的每个邀请（握手）的详细信息。
    * pageInfo  pageInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'handshakes' => 'setHandshakes',
            'pageInfo' => 'setPageInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * handshakes  邀请（握手）对象的列表，其中包含与指定账号关联的每个邀请（握手）的详细信息。
    * pageInfo  pageInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'handshakes' => 'getHandshakes',
            'pageInfo' => 'getPageInfo'
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
        $this->container['handshakes'] = isset($data['handshakes']) ? $data['handshakes'] : null;
        $this->container['pageInfo'] = isset($data['pageInfo']) ? $data['pageInfo'] : null;
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
    * Gets handshakes
    *  邀请（握手）对象的列表，其中包含与指定账号关联的每个邀请（握手）的详细信息。
    *
    * @return \HuaweiCloud\SDK\Organizations\V1\Model\HandshakeDto[]|null
    */
    public function getHandshakes()
    {
        return $this->container['handshakes'];
    }

    /**
    * Sets handshakes
    *
    * @param \HuaweiCloud\SDK\Organizations\V1\Model\HandshakeDto[]|null $handshakes 邀请（握手）对象的列表，其中包含与指定账号关联的每个邀请（握手）的详细信息。
    *
    * @return $this
    */
    public function setHandshakes($handshakes)
    {
        $this->container['handshakes'] = $handshakes;
        return $this;
    }

    /**
    * Gets pageInfo
    *  pageInfo
    *
    * @return \HuaweiCloud\SDK\Organizations\V1\Model\PageInfoDto|null
    */
    public function getPageInfo()
    {
        return $this->container['pageInfo'];
    }

    /**
    * Sets pageInfo
    *
    * @param \HuaweiCloud\SDK\Organizations\V1\Model\PageInfoDto|null $pageInfo pageInfo
    *
    * @return $this
    */
    public function setPageInfo($pageInfo)
    {
        $this->container['pageInfo'] = $pageInfo;
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

