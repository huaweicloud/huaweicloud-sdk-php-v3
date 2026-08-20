<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListIssueBySnapIdsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListIssueBySnapIdsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * message  请求返回的结果信息。
    * code  请求状态码。
    * issues  快照对应的工作项信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'message' => 'string',
            'code' => 'string',
            'issues' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * message  请求返回的结果信息。
    * code  请求状态码。
    * issues  快照对应的工作项信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'message' => null,
        'code' => null,
        'issues' => null
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
    * message  请求返回的结果信息。
    * code  请求状态码。
    * issues  快照对应的工作项信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'message' => 'message',
            'code' => 'code',
            'issues' => 'issues'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * message  请求返回的结果信息。
    * code  请求状态码。
    * issues  快照对应的工作项信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'message' => 'setMessage',
            'code' => 'setCode',
            'issues' => 'setIssues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * message  请求返回的结果信息。
    * code  请求状态码。
    * issues  快照对应的工作项信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'message' => 'getMessage',
            'code' => 'getCode',
            'issues' => 'getIssues'
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['issues'] = isset($data['issues']) ? $data['issues'] : null;
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
    * Gets message
    *  请求返回的结果信息。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 请求返回的结果信息。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets code
    *  请求状态码。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 请求状态码。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets issues
    *  快照对应的工作项信息。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueVO[]|null
    */
    public function getIssues()
    {
        return $this->container['issues'];
    }

    /**
    * Sets issues
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueVO[]|null $issues 快照对应的工作项信息。
    *
    * @return $this
    */
    public function setIssues($issues)
    {
        $this->container['issues'] = $issues;
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

