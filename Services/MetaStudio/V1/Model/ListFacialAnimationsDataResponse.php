<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFacialAnimationsDataResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFacialAnimationsDataResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * csvFileDownloadUrl  csv文件下载地址
    * state  任务的状态。 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败
    * errorMessage  失败任务描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'csvFileDownloadUrl' => 'string',
            'state' => 'string',
            'errorMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * csvFileDownloadUrl  csv文件下载地址
    * state  任务的状态。 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败
    * errorMessage  失败任务描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'csvFileDownloadUrl' => null,
        'state' => null,
        'errorMessage' => null
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
    * csvFileDownloadUrl  csv文件下载地址
    * state  任务的状态。 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败
    * errorMessage  失败任务描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'csvFileDownloadUrl' => 'csv_file_download_url',
            'state' => 'state',
            'errorMessage' => 'error_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * csvFileDownloadUrl  csv文件下载地址
    * state  任务的状态。 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败
    * errorMessage  失败任务描述
    *
    * @var string[]
    */
    protected static $setters = [
            'csvFileDownloadUrl' => 'setCsvFileDownloadUrl',
            'state' => 'setState',
            'errorMessage' => 'setErrorMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * csvFileDownloadUrl  csv文件下载地址
    * state  任务的状态。 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败
    * errorMessage  失败任务描述
    *
    * @var string[]
    */
    protected static $getters = [
            'csvFileDownloadUrl' => 'getCsvFileDownloadUrl',
            'state' => 'getState',
            'errorMessage' => 'getErrorMessage'
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
    const STATE_PROCESSING = 'PROCESSING';
    const STATE_SUCCEED = 'SUCCEED';
    const STATE_FAILED = 'FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_PROCESSING,
            self::STATE_SUCCEED,
            self::STATE_FAILED,
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
        $this->container['csvFileDownloadUrl'] = isset($data['csvFileDownloadUrl']) ? $data['csvFileDownloadUrl'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['csvFileDownloadUrl']) && (mb_strlen($this->container['csvFileDownloadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'csvFileDownloadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['csvFileDownloadUrl']) && (mb_strlen($this->container['csvFileDownloadUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'csvFileDownloadUrl', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 64)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 1)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['errorMessage']) && (mb_strlen($this->container['errorMessage']) > 2048)) {
                $invalidProperties[] = "invalid value for 'errorMessage', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['errorMessage']) && (mb_strlen($this->container['errorMessage']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorMessage', the character length must be bigger than or equal to 0.";
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
    * Gets csvFileDownloadUrl
    *  csv文件下载地址
    *
    * @return string|null
    */
    public function getCsvFileDownloadUrl()
    {
        return $this->container['csvFileDownloadUrl'];
    }

    /**
    * Sets csvFileDownloadUrl
    *
    * @param string|null $csvFileDownloadUrl csv文件下载地址
    *
    * @return $this
    */
    public function setCsvFileDownloadUrl($csvFileDownloadUrl)
    {
        $this->container['csvFileDownloadUrl'] = $csvFileDownloadUrl;
        return $this;
    }

    /**
    * Gets state
    *  任务的状态。 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 任务的状态。 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets errorMessage
    *  失败任务描述
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage 失败任务描述
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
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

