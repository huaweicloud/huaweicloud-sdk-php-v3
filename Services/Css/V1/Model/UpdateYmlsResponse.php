<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateYmlsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateYmlsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * acknowledged  修改是否成功。 - true: 修改成功。 - false: 修改失败。
    * externalMessage  错误信息描述。当acknowledged为true时，该字段返回null。
    * httpErrorResponse  HTTP错误信息。默认为null。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'acknowledged' => 'bool',
            'externalMessage' => 'string',
            'httpErrorResponse' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * acknowledged  修改是否成功。 - true: 修改成功。 - false: 修改失败。
    * externalMessage  错误信息描述。当acknowledged为true时，该字段返回null。
    * httpErrorResponse  HTTP错误信息。默认为null。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'acknowledged' => null,
        'externalMessage' => null,
        'httpErrorResponse' => null
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
    * acknowledged  修改是否成功。 - true: 修改成功。 - false: 修改失败。
    * externalMessage  错误信息描述。当acknowledged为true时，该字段返回null。
    * httpErrorResponse  HTTP错误信息。默认为null。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'acknowledged' => 'acknowledged',
            'externalMessage' => 'externalMessage',
            'httpErrorResponse' => 'httpErrorResponse'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * acknowledged  修改是否成功。 - true: 修改成功。 - false: 修改失败。
    * externalMessage  错误信息描述。当acknowledged为true时，该字段返回null。
    * httpErrorResponse  HTTP错误信息。默认为null。
    *
    * @var string[]
    */
    protected static $setters = [
            'acknowledged' => 'setAcknowledged',
            'externalMessage' => 'setExternalMessage',
            'httpErrorResponse' => 'setHttpErrorResponse'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * acknowledged  修改是否成功。 - true: 修改成功。 - false: 修改失败。
    * externalMessage  错误信息描述。当acknowledged为true时，该字段返回null。
    * httpErrorResponse  HTTP错误信息。默认为null。
    *
    * @var string[]
    */
    protected static $getters = [
            'acknowledged' => 'getAcknowledged',
            'externalMessage' => 'getExternalMessage',
            'httpErrorResponse' => 'getHttpErrorResponse'
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
        $this->container['acknowledged'] = isset($data['acknowledged']) ? $data['acknowledged'] : null;
        $this->container['externalMessage'] = isset($data['externalMessage']) ? $data['externalMessage'] : null;
        $this->container['httpErrorResponse'] = isset($data['httpErrorResponse']) ? $data['httpErrorResponse'] : null;
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
    * Gets acknowledged
    *  修改是否成功。 - true: 修改成功。 - false: 修改失败。
    *
    * @return bool|null
    */
    public function getAcknowledged()
    {
        return $this->container['acknowledged'];
    }

    /**
    * Sets acknowledged
    *
    * @param bool|null $acknowledged 修改是否成功。 - true: 修改成功。 - false: 修改失败。
    *
    * @return $this
    */
    public function setAcknowledged($acknowledged)
    {
        $this->container['acknowledged'] = $acknowledged;
        return $this;
    }

    /**
    * Gets externalMessage
    *  错误信息描述。当acknowledged为true时，该字段返回null。
    *
    * @return string|null
    */
    public function getExternalMessage()
    {
        return $this->container['externalMessage'];
    }

    /**
    * Sets externalMessage
    *
    * @param string|null $externalMessage 错误信息描述。当acknowledged为true时，该字段返回null。
    *
    * @return $this
    */
    public function setExternalMessage($externalMessage)
    {
        $this->container['externalMessage'] = $externalMessage;
        return $this;
    }

    /**
    * Gets httpErrorResponse
    *  HTTP错误信息。默认为null。
    *
    * @return string|null
    */
    public function getHttpErrorResponse()
    {
        return $this->container['httpErrorResponse'];
    }

    /**
    * Sets httpErrorResponse
    *
    * @param string|null $httpErrorResponse HTTP错误信息。默认为null。
    *
    * @return $this
    */
    public function setHttpErrorResponse($httpErrorResponse)
    {
        $this->container['httpErrorResponse'] = $httpErrorResponse;
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

