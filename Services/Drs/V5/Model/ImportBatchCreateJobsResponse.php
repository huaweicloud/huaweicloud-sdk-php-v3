<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportBatchCreateJobsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportBatchCreateJobsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * asyncJobId  批量导入任务id。
    * importErrorMessages  导入失败的错误信息。
    * errorCode  错误码。
    * errorMsg  错误描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'asyncJobId' => 'string',
            'importErrorMessages' => '\HuaweiCloud\SDK\Drs\V5\Model\ImportErrorMessageResp[]',
            'errorCode' => 'string',
            'errorMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * asyncJobId  批量导入任务id。
    * importErrorMessages  导入失败的错误信息。
    * errorCode  错误码。
    * errorMsg  错误描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'asyncJobId' => null,
        'importErrorMessages' => null,
        'errorCode' => null,
        'errorMsg' => null
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
    * asyncJobId  批量导入任务id。
    * importErrorMessages  导入失败的错误信息。
    * errorCode  错误码。
    * errorMsg  错误描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'asyncJobId' => 'async_job_id',
            'importErrorMessages' => 'import_error_messages',
            'errorCode' => 'error_code',
            'errorMsg' => 'error_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * asyncJobId  批量导入任务id。
    * importErrorMessages  导入失败的错误信息。
    * errorCode  错误码。
    * errorMsg  错误描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'asyncJobId' => 'setAsyncJobId',
            'importErrorMessages' => 'setImportErrorMessages',
            'errorCode' => 'setErrorCode',
            'errorMsg' => 'setErrorMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * asyncJobId  批量导入任务id。
    * importErrorMessages  导入失败的错误信息。
    * errorCode  错误码。
    * errorMsg  错误描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'asyncJobId' => 'getAsyncJobId',
            'importErrorMessages' => 'getImportErrorMessages',
            'errorCode' => 'getErrorCode',
            'errorMsg' => 'getErrorMsg'
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
        $this->container['asyncJobId'] = isset($data['asyncJobId']) ? $data['asyncJobId'] : null;
        $this->container['importErrorMessages'] = isset($data['importErrorMessages']) ? $data['importErrorMessages'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['asyncJobId']) && (mb_strlen($this->container['asyncJobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'asyncJobId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['asyncJobId']) && (mb_strlen($this->container['asyncJobId']) < 0)) {
                $invalidProperties[] = "invalid value for 'asyncJobId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['errorCode']) && (mb_strlen($this->container['errorCode']) > 12)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be smaller than or equal to 12.";
            }
            if (!is_null($this->container['errorCode']) && (mb_strlen($this->container['errorCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be bigger than or equal to 1.";
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
    * Gets asyncJobId
    *  批量导入任务id。
    *
    * @return string|null
    */
    public function getAsyncJobId()
    {
        return $this->container['asyncJobId'];
    }

    /**
    * Sets asyncJobId
    *
    * @param string|null $asyncJobId 批量导入任务id。
    *
    * @return $this
    */
    public function setAsyncJobId($asyncJobId)
    {
        $this->container['asyncJobId'] = $asyncJobId;
        return $this;
    }

    /**
    * Gets importErrorMessages
    *  导入失败的错误信息。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\ImportErrorMessageResp[]|null
    */
    public function getImportErrorMessages()
    {
        return $this->container['importErrorMessages'];
    }

    /**
    * Sets importErrorMessages
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\ImportErrorMessageResp[]|null $importErrorMessages 导入失败的错误信息。
    *
    * @return $this
    */
    public function setImportErrorMessages($importErrorMessages)
    {
        $this->container['importErrorMessages'] = $importErrorMessages;
        return $this;
    }

    /**
    * Gets errorCode
    *  错误码。
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
    * @param string|null $errorCode 错误码。
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMsg
    *  错误描述。
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 错误描述。
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
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

