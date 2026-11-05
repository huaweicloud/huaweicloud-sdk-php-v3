<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTaskLogsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTaskLogsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appId  应用id
    * recordId  部署记录id
    * offset  起始位置，默认0；长度1-19
    * endOffset  结束位置，开始为0；长度1-19
    * stepId  步骤id；如果传，则按step查询日志；长度1-60
    * contentType  消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appId' => 'string',
            'recordId' => 'string',
            'offset' => 'string',
            'endOffset' => 'string',
            'stepId' => 'string',
            'contentType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appId  应用id
    * recordId  部署记录id
    * offset  起始位置，默认0；长度1-19
    * endOffset  结束位置，开始为0；长度1-19
    * stepId  步骤id；如果传，则按step查询日志；长度1-60
    * contentType  消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appId' => null,
        'recordId' => null,
        'offset' => null,
        'endOffset' => null,
        'stepId' => null,
        'contentType' => null
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
    * appId  应用id
    * recordId  部署记录id
    * offset  起始位置，默认0；长度1-19
    * endOffset  结束位置，开始为0；长度1-19
    * stepId  步骤id；如果传，则按step查询日志；长度1-60
    * contentType  消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appId' => 'app_id',
            'recordId' => 'record_id',
            'offset' => 'offset',
            'endOffset' => 'end_offset',
            'stepId' => 'step_id',
            'contentType' => 'Content-Type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appId  应用id
    * recordId  部署记录id
    * offset  起始位置，默认0；长度1-19
    * endOffset  结束位置，开始为0；长度1-19
    * stepId  步骤id；如果传，则按step查询日志；长度1-60
    * contentType  消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    *
    * @var string[]
    */
    protected static $setters = [
            'appId' => 'setAppId',
            'recordId' => 'setRecordId',
            'offset' => 'setOffset',
            'endOffset' => 'setEndOffset',
            'stepId' => 'setStepId',
            'contentType' => 'setContentType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appId  应用id
    * recordId  部署记录id
    * offset  起始位置，默认0；长度1-19
    * endOffset  结束位置，开始为0；长度1-19
    * stepId  步骤id；如果传，则按step查询日志；长度1-60
    * contentType  消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    *
    * @var string[]
    */
    protected static $getters = [
            'appId' => 'getAppId',
            'recordId' => 'getRecordId',
            'offset' => 'getOffset',
            'endOffset' => 'getEndOffset',
            'stepId' => 'getStepId',
            'contentType' => 'getContentType'
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
    const CONTENT_TYPE_APPLICATION_JSONCHARSETUTF_8 = 'application/json;charset=utf-8';
    const CONTENT_TYPE_APPLICATION_JSON = 'application/json';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getContentTypeAllowableValues()
    {
        return [
            self::CONTENT_TYPE_APPLICATION_JSONCHARSETUTF_8,
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
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['recordId'] = isset($data['recordId']) ? $data['recordId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['endOffset'] = isset($data['endOffset']) ? $data['endOffset'] : null;
        $this->container['stepId'] = isset($data['stepId']) ? $data['stepId'] : null;
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['appId'] === null) {
            $invalidProperties[] = "'appId' can't be null";
        }
            if ((mb_strlen($this->container['appId']) > 32)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['appId']) < 32)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/^[A-Za-z0-9]{32}$/", $this->container['appId'])) {
                $invalidProperties[] = "invalid value for 'appId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
        if ($this->container['recordId'] === null) {
            $invalidProperties[] = "'recordId' can't be null";
        }
            if ((mb_strlen($this->container['recordId']) > 32)) {
                $invalidProperties[] = "invalid value for 'recordId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['recordId']) < 32)) {
                $invalidProperties[] = "invalid value for 'recordId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/^[A-Za-z0-9]{32}$/", $this->container['recordId'])) {
                $invalidProperties[] = "invalid value for 'recordId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if ((mb_strlen($this->container['offset']) > 19)) {
                $invalidProperties[] = "invalid value for 'offset', the character length must be smaller than or equal to 19.";
            }
            if ((mb_strlen($this->container['offset']) < 1)) {
                $invalidProperties[] = "invalid value for 'offset', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[0-9]{1,19}$/", $this->container['offset'])) {
                $invalidProperties[] = "invalid value for 'offset', must be conform to the pattern /^[0-9]{1,19}$/.";
            }
        if ($this->container['endOffset'] === null) {
            $invalidProperties[] = "'endOffset' can't be null";
        }
            if ((mb_strlen($this->container['endOffset']) > 19)) {
                $invalidProperties[] = "invalid value for 'endOffset', the character length must be smaller than or equal to 19.";
            }
            if ((mb_strlen($this->container['endOffset']) < 1)) {
                $invalidProperties[] = "invalid value for 'endOffset', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[0-9]{1,19}$/", $this->container['endOffset'])) {
                $invalidProperties[] = "invalid value for 'endOffset', must be conform to the pattern /^[0-9]{1,19}$/.";
            }
            if (!is_null($this->container['stepId']) && (mb_strlen($this->container['stepId']) > 32)) {
                $invalidProperties[] = "invalid value for 'stepId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['stepId']) && (mb_strlen($this->container['stepId']) < 0)) {
                $invalidProperties[] = "invalid value for 'stepId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['stepId']) && !preg_match("/^[A-Za-z0-9]{1,32}$/", $this->container['stepId'])) {
                $invalidProperties[] = "invalid value for 'stepId', must be conform to the pattern /^[A-Za-z0-9]{1,32}$/.";
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
    * Gets appId
    *  应用id
    *
    * @return string
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string $appId 应用id
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets recordId
    *  部署记录id
    *
    * @return string
    */
    public function getRecordId()
    {
        return $this->container['recordId'];
    }

    /**
    * Sets recordId
    *
    * @param string $recordId 部署记录id
    *
    * @return $this
    */
    public function setRecordId($recordId)
    {
        $this->container['recordId'] = $recordId;
        return $this;
    }

    /**
    * Gets offset
    *  起始位置，默认0；长度1-19
    *
    * @return string
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string $offset 起始位置，默认0；长度1-19
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets endOffset
    *  结束位置，开始为0；长度1-19
    *
    * @return string
    */
    public function getEndOffset()
    {
        return $this->container['endOffset'];
    }

    /**
    * Sets endOffset
    *
    * @param string $endOffset 结束位置，开始为0；长度1-19
    *
    * @return $this
    */
    public function setEndOffset($endOffset)
    {
        $this->container['endOffset'] = $endOffset;
        return $this;
    }

    /**
    * Gets stepId
    *  步骤id；如果传，则按step查询日志；长度1-60
    *
    * @return string|null
    */
    public function getStepId()
    {
        return $this->container['stepId'];
    }

    /**
    * Sets stepId
    *
    * @param string|null $stepId 步骤id；如果传，则按step查询日志；长度1-60
    *
    * @return $this
    */
    public function setStepId($stepId)
    {
        $this->container['stepId'] = $stepId;
        return $this;
    }

    /**
    * Gets contentType
    *  消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
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
    * @param string $contentType 消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
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

