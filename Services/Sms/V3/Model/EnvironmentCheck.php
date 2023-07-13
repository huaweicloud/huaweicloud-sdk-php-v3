<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EnvironmentCheck implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EnvironmentCheck';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  该检查项的ID
    * params  参数
    * name  检查项名称
    * result  检查结果 OK：检查通过 WARN：警告 ERROR:检查不通过
    * errorCode  检查不通过的错误码
    * errorOrWarn  检查的错误或者警告
    * errorParams  检查不通过的错误参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'params' => 'string[]',
            'name' => 'string',
            'result' => 'string',
            'errorCode' => 'string',
            'errorOrWarn' => 'string',
            'errorParams' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  该检查项的ID
    * params  参数
    * name  检查项名称
    * result  检查结果 OK：检查通过 WARN：警告 ERROR:检查不通过
    * errorCode  检查不通过的错误码
    * errorOrWarn  检查的错误或者警告
    * errorParams  检查不通过的错误参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'params' => null,
        'name' => null,
        'result' => null,
        'errorCode' => null,
        'errorOrWarn' => null,
        'errorParams' => null
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
    * id  该检查项的ID
    * params  参数
    * name  检查项名称
    * result  检查结果 OK：检查通过 WARN：警告 ERROR:检查不通过
    * errorCode  检查不通过的错误码
    * errorOrWarn  检查的错误或者警告
    * errorParams  检查不通过的错误参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'params' => 'params',
            'name' => 'name',
            'result' => 'result',
            'errorCode' => 'error_code',
            'errorOrWarn' => 'error_or_warn',
            'errorParams' => 'error_params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  该检查项的ID
    * params  参数
    * name  检查项名称
    * result  检查结果 OK：检查通过 WARN：警告 ERROR:检查不通过
    * errorCode  检查不通过的错误码
    * errorOrWarn  检查的错误或者警告
    * errorParams  检查不通过的错误参数
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'params' => 'setParams',
            'name' => 'setName',
            'result' => 'setResult',
            'errorCode' => 'setErrorCode',
            'errorOrWarn' => 'setErrorOrWarn',
            'errorParams' => 'setErrorParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  该检查项的ID
    * params  参数
    * name  检查项名称
    * result  检查结果 OK：检查通过 WARN：警告 ERROR:检查不通过
    * errorCode  检查不通过的错误码
    * errorOrWarn  检查的错误或者警告
    * errorParams  检查不通过的错误参数
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'params' => 'getParams',
            'name' => 'getName',
            'result' => 'getResult',
            'errorCode' => 'getErrorCode',
            'errorOrWarn' => 'getErrorOrWarn',
            'errorParams' => 'getErrorParams'
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
    const RESULT_OK = 'OK';
    const RESULT_WARN = 'WARN';
    const RESULT_ERROR = 'ERROR';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResultAllowableValues()
    {
        return [
            self::RESULT_OK,
            self::RESULT_WARN,
            self::RESULT_ERROR,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorOrWarn'] = isset($data['errorOrWarn']) ? $data['errorOrWarn'] : null;
        $this->container['errorParams'] = isset($data['errorParams']) ? $data['errorParams'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if (($this->container['id'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['id'] < 0)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['result'] === null) {
            $invalidProperties[] = "'result' can't be null";
        }
            $allowedValues = $this->getResultAllowableValues();
                if (!is_null($this->container['result']) && !in_array($this->container['result'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'result', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['result']) > 255)) {
                $invalidProperties[] = "invalid value for 'result', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['result']) < 0)) {
                $invalidProperties[] = "invalid value for 'result', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['errorCode']) && (mb_strlen($this->container['errorCode']) > 255)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['errorCode']) && (mb_strlen($this->container['errorCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['errorOrWarn']) && (mb_strlen($this->container['errorOrWarn']) > 255)) {
                $invalidProperties[] = "invalid value for 'errorOrWarn', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['errorOrWarn']) && (mb_strlen($this->container['errorOrWarn']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorOrWarn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['errorParams']) && (mb_strlen($this->container['errorParams']) > 255)) {
                $invalidProperties[] = "invalid value for 'errorParams', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['errorParams']) && (mb_strlen($this->container['errorParams']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorParams', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  该检查项的ID
    *
    * @return int
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int $id 该检查项的ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets params
    *  参数
    *
    * @return string[]|null
    */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
    * Sets params
    *
    * @param string[]|null $params 参数
    *
    * @return $this
    */
    public function setParams($params)
    {
        $this->container['params'] = $params;
        return $this;
    }

    /**
    * Gets name
    *  检查项名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 检查项名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets result
    *  检查结果 OK：检查通过 WARN：警告 ERROR:检查不通过
    *
    * @return string
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string $result 检查结果 OK：检查通过 WARN：警告 ERROR:检查不通过
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets errorCode
    *  检查不通过的错误码
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 检查不通过的错误码
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorOrWarn
    *  检查的错误或者警告
    *
    * @return string|null
    */
    public function getErrorOrWarn()
    {
        return $this->container['errorOrWarn'];
    }

    /**
    * Sets errorOrWarn
    *
    * @param string|null $errorOrWarn 检查的错误或者警告
    *
    * @return $this
    */
    public function setErrorOrWarn($errorOrWarn)
    {
        $this->container['errorOrWarn'] = $errorOrWarn;
        return $this;
    }

    /**
    * Gets errorParams
    *  检查不通过的错误参数
    *
    * @return string|null
    */
    public function getErrorParams()
    {
        return $this->container['errorParams'];
    }

    /**
    * Sets errorParams
    *
    * @param string|null $errorParams 检查不通过的错误参数
    *
    * @return $this
    */
    public function setErrorParams($errorParams)
    {
        $this->container['errorParams'] = $errorParams;
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

