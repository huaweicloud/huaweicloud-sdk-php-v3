<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateFixtedResponseConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateFixtedResponseConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * statusCode  **参数解释**：返回码。  **约束限制**：不涉及  **取值范围**：200-299，400-499，500-599。  **默认取值**：不涉及
    * contentType  **参数解释**：返回body的格式。  **约束限制**：不涉及  **取值范围**： - text/plain - text/css - text/html - application/javascript - application/json  **默认取值**：不涉及
    * messageBody  **参数解释**：返回消息内容。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * insertHeadersConfig  insertHeadersConfig
    * removeHeadersConfig  removeHeadersConfig
    * trafficLimitConfig  trafficLimitConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'statusCode' => 'string',
            'contentType' => 'string',
            'messageBody' => 'string',
            'insertHeadersConfig' => '\HuaweiCloud\SDK\Elb\V3\Model\CreateInsertHeadersConfig',
            'removeHeadersConfig' => '\HuaweiCloud\SDK\Elb\V3\Model\CreateRemoveHeadersConfig',
            'trafficLimitConfig' => '\HuaweiCloud\SDK\Elb\V3\Model\CreateTrafficLimitConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * statusCode  **参数解释**：返回码。  **约束限制**：不涉及  **取值范围**：200-299，400-499，500-599。  **默认取值**：不涉及
    * contentType  **参数解释**：返回body的格式。  **约束限制**：不涉及  **取值范围**： - text/plain - text/css - text/html - application/javascript - application/json  **默认取值**：不涉及
    * messageBody  **参数解释**：返回消息内容。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * insertHeadersConfig  insertHeadersConfig
    * removeHeadersConfig  removeHeadersConfig
    * trafficLimitConfig  trafficLimitConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'statusCode' => null,
        'contentType' => null,
        'messageBody' => null,
        'insertHeadersConfig' => null,
        'removeHeadersConfig' => null,
        'trafficLimitConfig' => null
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
    * statusCode  **参数解释**：返回码。  **约束限制**：不涉及  **取值范围**：200-299，400-499，500-599。  **默认取值**：不涉及
    * contentType  **参数解释**：返回body的格式。  **约束限制**：不涉及  **取值范围**： - text/plain - text/css - text/html - application/javascript - application/json  **默认取值**：不涉及
    * messageBody  **参数解释**：返回消息内容。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * insertHeadersConfig  insertHeadersConfig
    * removeHeadersConfig  removeHeadersConfig
    * trafficLimitConfig  trafficLimitConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'statusCode' => 'status_code',
            'contentType' => 'content_type',
            'messageBody' => 'message_body',
            'insertHeadersConfig' => 'insert_headers_config',
            'removeHeadersConfig' => 'remove_headers_config',
            'trafficLimitConfig' => 'traffic_limit_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * statusCode  **参数解释**：返回码。  **约束限制**：不涉及  **取值范围**：200-299，400-499，500-599。  **默认取值**：不涉及
    * contentType  **参数解释**：返回body的格式。  **约束限制**：不涉及  **取值范围**： - text/plain - text/css - text/html - application/javascript - application/json  **默认取值**：不涉及
    * messageBody  **参数解释**：返回消息内容。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * insertHeadersConfig  insertHeadersConfig
    * removeHeadersConfig  removeHeadersConfig
    * trafficLimitConfig  trafficLimitConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'statusCode' => 'setStatusCode',
            'contentType' => 'setContentType',
            'messageBody' => 'setMessageBody',
            'insertHeadersConfig' => 'setInsertHeadersConfig',
            'removeHeadersConfig' => 'setRemoveHeadersConfig',
            'trafficLimitConfig' => 'setTrafficLimitConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * statusCode  **参数解释**：返回码。  **约束限制**：不涉及  **取值范围**：200-299，400-499，500-599。  **默认取值**：不涉及
    * contentType  **参数解释**：返回body的格式。  **约束限制**：不涉及  **取值范围**： - text/plain - text/css - text/html - application/javascript - application/json  **默认取值**：不涉及
    * messageBody  **参数解释**：返回消息内容。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * insertHeadersConfig  insertHeadersConfig
    * removeHeadersConfig  removeHeadersConfig
    * trafficLimitConfig  trafficLimitConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'statusCode' => 'getStatusCode',
            'contentType' => 'getContentType',
            'messageBody' => 'getMessageBody',
            'insertHeadersConfig' => 'getInsertHeadersConfig',
            'removeHeadersConfig' => 'getRemoveHeadersConfig',
            'trafficLimitConfig' => 'getTrafficLimitConfig'
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
        $this->container['insertHeadersConfig'] = isset($data['insertHeadersConfig']) ? $data['insertHeadersConfig'] : null;
        $this->container['removeHeadersConfig'] = isset($data['removeHeadersConfig']) ? $data['removeHeadersConfig'] : null;
        $this->container['trafficLimitConfig'] = isset($data['trafficLimitConfig']) ? $data['trafficLimitConfig'] : null;
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
            if (!preg_match("/^[2|4|5]\\d{2}$/", $this->container['statusCode'])) {
                $invalidProperties[] = "invalid value for 'statusCode', must be conform to the pattern /^[2|4|5]\\d{2}$/.";
            }
            $allowedValues = $this->getContentTypeAllowableValues();
                if (!is_null($this->container['contentType']) && !in_array($this->container['contentType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'contentType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['messageBody']) && (mb_strlen($this->container['messageBody']) > 1024)) {
                $invalidProperties[] = "invalid value for 'messageBody', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['messageBody']) && (mb_strlen($this->container['messageBody']) < 0)) {
                $invalidProperties[] = "invalid value for 'messageBody', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['messageBody']) && !preg_match("/^[\\p{Print}\\u4e00-\\u9fa5]*$/", $this->container['messageBody'])) {
                $invalidProperties[] = "invalid value for 'messageBody', must be conform to the pattern /^[\\p{Print}\\u4e00-\\u9fa5]*$/.";
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
    *  **参数解释**：返回码。  **约束限制**：不涉及  **取值范围**：200-299，400-499，500-599。  **默认取值**：不涉及
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
    * @param string $statusCode **参数解释**：返回码。  **约束限制**：不涉及  **取值范围**：200-299，400-499，500-599。  **默认取值**：不涉及
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
    *  **参数解释**：返回body的格式。  **约束限制**：不涉及  **取值范围**： - text/plain - text/css - text/html - application/javascript - application/json  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string|null $contentType **参数解释**：返回body的格式。  **约束限制**：不涉及  **取值范围**： - text/plain - text/css - text/html - application/javascript - application/json  **默认取值**：不涉及
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
    *  **参数解释**：返回消息内容。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getMessageBody()
    {
        return $this->container['messageBody'];
    }

    /**
    * Sets messageBody
    *
    * @param string|null $messageBody **参数解释**：返回消息内容。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setMessageBody($messageBody)
    {
        $this->container['messageBody'] = $messageBody;
        return $this;
    }

    /**
    * Gets insertHeadersConfig
    *  insertHeadersConfig
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\CreateInsertHeadersConfig|null
    */
    public function getInsertHeadersConfig()
    {
        return $this->container['insertHeadersConfig'];
    }

    /**
    * Sets insertHeadersConfig
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\CreateInsertHeadersConfig|null $insertHeadersConfig insertHeadersConfig
    *
    * @return $this
    */
    public function setInsertHeadersConfig($insertHeadersConfig)
    {
        $this->container['insertHeadersConfig'] = $insertHeadersConfig;
        return $this;
    }

    /**
    * Gets removeHeadersConfig
    *  removeHeadersConfig
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\CreateRemoveHeadersConfig|null
    */
    public function getRemoveHeadersConfig()
    {
        return $this->container['removeHeadersConfig'];
    }

    /**
    * Sets removeHeadersConfig
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\CreateRemoveHeadersConfig|null $removeHeadersConfig removeHeadersConfig
    *
    * @return $this
    */
    public function setRemoveHeadersConfig($removeHeadersConfig)
    {
        $this->container['removeHeadersConfig'] = $removeHeadersConfig;
        return $this;
    }

    /**
    * Gets trafficLimitConfig
    *  trafficLimitConfig
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\CreateTrafficLimitConfig|null
    */
    public function getTrafficLimitConfig()
    {
        return $this->container['trafficLimitConfig'];
    }

    /**
    * Sets trafficLimitConfig
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\CreateTrafficLimitConfig|null $trafficLimitConfig trafficLimitConfig
    *
    * @return $this
    */
    public function setTrafficLimitConfig($trafficLimitConfig)
    {
        $this->container['trafficLimitConfig'] = $trafficLimitConfig;
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

