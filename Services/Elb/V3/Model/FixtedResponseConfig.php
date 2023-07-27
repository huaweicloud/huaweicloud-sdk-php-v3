<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FixtedResponseConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FixtedResponseConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * statusCode  返回码。支持200~299,400~499,500~599。
    * contentType  返回body的格式。  取值范围： - text/plain - text/css - text/html - application/javascript - application/json
    * messageBody  返回消息内容。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'statusCode' => 'string',
            'contentType' => 'string',
            'messageBody' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * statusCode  返回码。支持200~299,400~499,500~599。
    * contentType  返回body的格式。  取值范围： - text/plain - text/css - text/html - application/javascript - application/json
    * messageBody  返回消息内容。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'statusCode' => null,
        'contentType' => null,
        'messageBody' => null
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
    * statusCode  返回码。支持200~299,400~499,500~599。
    * contentType  返回body的格式。  取值范围： - text/plain - text/css - text/html - application/javascript - application/json
    * messageBody  返回消息内容。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'statusCode' => 'status_code',
            'contentType' => 'content_type',
            'messageBody' => 'message_body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * statusCode  返回码。支持200~299,400~499,500~599。
    * contentType  返回body的格式。  取值范围： - text/plain - text/css - text/html - application/javascript - application/json
    * messageBody  返回消息内容。
    *
    * @var string[]
    */
    protected static $setters = [
            'statusCode' => 'setStatusCode',
            'contentType' => 'setContentType',
            'messageBody' => 'setMessageBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * statusCode  返回码。支持200~299,400~499,500~599。
    * contentType  返回body的格式。  取值范围： - text/plain - text/css - text/html - application/javascript - application/json
    * messageBody  返回消息内容。
    *
    * @var string[]
    */
    protected static $getters = [
            'statusCode' => 'getStatusCode',
            'contentType' => 'getContentType',
            'messageBody' => 'getMessageBody'
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
    const CONTENT_TYPE_TEXT_PLAIN = 'text/plain';
    const CONTENT_TYPE_TEXT_CSS = 'text/css';
    const CONTENT_TYPE_TEXT_HTML = 'text/html';
    const CONTENT_TYPE_APPLICATION_JAVASCRIPT = 'application/javascript';
    const CONTENT_TYPE_APPLICATION_JSON = 'application/json';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getContentTypeAllowableValues()
    {
        return [
            self::CONTENT_TYPE_TEXT_PLAIN,
            self::CONTENT_TYPE_TEXT_CSS,
            self::CONTENT_TYPE_TEXT_HTML,
            self::CONTENT_TYPE_APPLICATION_JAVASCRIPT,
            self::CONTENT_TYPE_APPLICATION_JSON,
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
        $this->container['statusCode'] = isset($data['statusCode']) ? $data['statusCode'] : null;
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['messageBody'] = isset($data['messageBody']) ? $data['messageBody'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['statusCode'] === null) {
            $invalidProperties[] = "'statusCode' can't be null";
        }
            if ((mb_strlen($this->container['statusCode']) > 16)) {
                $invalidProperties[] = "invalid value for 'statusCode', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['statusCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'statusCode', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
        }
            $allowedValues = $this->getContentTypeAllowableValues();
                if (!is_null($this->container['contentType']) && !in_array($this->container['contentType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'contentType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['contentType']) > 32)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['contentType']) < 0)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['messageBody'] === null) {
            $invalidProperties[] = "'messageBody' can't be null";
        }
            if ((mb_strlen($this->container['messageBody']) > 1024)) {
                $invalidProperties[] = "invalid value for 'messageBody', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['messageBody']) < 0)) {
                $invalidProperties[] = "invalid value for 'messageBody', the character length must be bigger than or equal to 0.";
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
    * Gets statusCode
    *  返回码。支持200~299,400~499,500~599。
    *
    * @return string
    */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
    * Sets statusCode
    *
    * @param string $statusCode 返回码。支持200~299,400~499,500~599。
    *
    * @return $this
    */
    public function setStatusCode($statusCode)
    {
        $this->container['statusCode'] = $statusCode;
        return $this;
    }

    /**
    * Gets contentType
    *  返回body的格式。  取值范围： - text/plain - text/css - text/html - application/javascript - application/json
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType 返回body的格式。  取值范围： - text/plain - text/css - text/html - application/javascript - application/json
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets messageBody
    *  返回消息内容。
    *
    * @return string
    */
    public function getMessageBody()
    {
        return $this->container['messageBody'];
    }

    /**
    * Sets messageBody
    *
    * @param string $messageBody 返回消息内容。
    *
    * @return $this
    */
    public function setMessageBody($messageBody)
    {
        $this->container['messageBody'] = $messageBody;
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

