<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccessPreview implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccessPreview';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessPreviewId  分析预览的唯一标识符。
    * analyzerId  分析器的唯一标识符。
    * configurations  configurations
    * createdAt  createdAt
    * status  status
    * statusReason  statusReason
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessPreviewId' => 'string',
            'analyzerId' => 'string',
            'configurations' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\Configuration',
            'createdAt' => '\DateTime',
            'status' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\AccessPreviewStatus',
            'statusReason' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\PreviewStatusReason'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessPreviewId  分析预览的唯一标识符。
    * analyzerId  分析器的唯一标识符。
    * configurations  configurations
    * createdAt  createdAt
    * status  status
    * statusReason  statusReason
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessPreviewId' => null,
        'analyzerId' => null,
        'configurations' => null,
        'createdAt' => 'date-time',
        'status' => null,
        'statusReason' => null
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
    * accessPreviewId  分析预览的唯一标识符。
    * analyzerId  分析器的唯一标识符。
    * configurations  configurations
    * createdAt  createdAt
    * status  status
    * statusReason  statusReason
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessPreviewId' => 'access_preview_id',
            'analyzerId' => 'analyzer_id',
            'configurations' => 'configurations',
            'createdAt' => 'created_at',
            'status' => 'status',
            'statusReason' => 'status_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessPreviewId  分析预览的唯一标识符。
    * analyzerId  分析器的唯一标识符。
    * configurations  configurations
    * createdAt  createdAt
    * status  status
    * statusReason  statusReason
    *
    * @var string[]
    */
    protected static $setters = [
            'accessPreviewId' => 'setAccessPreviewId',
            'analyzerId' => 'setAnalyzerId',
            'configurations' => 'setConfigurations',
            'createdAt' => 'setCreatedAt',
            'status' => 'setStatus',
            'statusReason' => 'setStatusReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessPreviewId  分析预览的唯一标识符。
    * analyzerId  分析器的唯一标识符。
    * configurations  configurations
    * createdAt  createdAt
    * status  status
    * statusReason  statusReason
    *
    * @var string[]
    */
    protected static $getters = [
            'accessPreviewId' => 'getAccessPreviewId',
            'analyzerId' => 'getAnalyzerId',
            'configurations' => 'getConfigurations',
            'createdAt' => 'getCreatedAt',
            'status' => 'getStatus',
            'statusReason' => 'getStatusReason'
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
        $this->container['accessPreviewId'] = isset($data['accessPreviewId']) ? $data['accessPreviewId'] : null;
        $this->container['analyzerId'] = isset($data['analyzerId']) ? $data['analyzerId'] : null;
        $this->container['configurations'] = isset($data['configurations']) ? $data['configurations'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusReason'] = isset($data['statusReason']) ? $data['statusReason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['accessPreviewId'] === null) {
            $invalidProperties[] = "'accessPreviewId' can't be null";
        }
            if ((mb_strlen($this->container['accessPreviewId']) > 36)) {
                $invalidProperties[] = "invalid value for 'accessPreviewId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['accessPreviewId']) < 1)) {
                $invalidProperties[] = "invalid value for 'accessPreviewId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\w-]+$/", $this->container['accessPreviewId'])) {
                $invalidProperties[] = "invalid value for 'accessPreviewId', must be conform to the pattern /^[\\w-]+$/.";
            }
        if ($this->container['analyzerId'] === null) {
            $invalidProperties[] = "'analyzerId' can't be null";
        }
            if ((mb_strlen($this->container['analyzerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'analyzerId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['analyzerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'analyzerId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\w-]+$/", $this->container['analyzerId'])) {
                $invalidProperties[] = "invalid value for 'analyzerId', must be conform to the pattern /^[\\w-]+$/.";
            }
        if ($this->container['configurations'] === null) {
            $invalidProperties[] = "'configurations' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    * Gets accessPreviewId
    *  分析预览的唯一标识符。
    *
    * @return string
    */
    public function getAccessPreviewId()
    {
        return $this->container['accessPreviewId'];
    }

    /**
    * Sets accessPreviewId
    *
    * @param string $accessPreviewId 分析预览的唯一标识符。
    *
    * @return $this
    */
    public function setAccessPreviewId($accessPreviewId)
    {
        $this->container['accessPreviewId'] = $accessPreviewId;
        return $this;
    }

    /**
    * Gets analyzerId
    *  分析器的唯一标识符。
    *
    * @return string
    */
    public function getAnalyzerId()
    {
        return $this->container['analyzerId'];
    }

    /**
    * Sets analyzerId
    *
    * @param string $analyzerId 分析器的唯一标识符。
    *
    * @return $this
    */
    public function setAnalyzerId($analyzerId)
    {
        $this->container['analyzerId'] = $analyzerId;
        return $this;
    }

    /**
    * Gets configurations
    *  configurations
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\Configuration
    */
    public function getConfigurations()
    {
        return $this->container['configurations'];
    }

    /**
    * Sets configurations
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\Configuration $configurations configurations
    *
    * @return $this
    */
    public function setConfigurations($configurations)
    {
        $this->container['configurations'] = $configurations;
        return $this;
    }

    /**
    * Gets createdAt
    *  createdAt
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt createdAt
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\AccessPreviewStatus
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\AccessPreviewStatus $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets statusReason
    *  statusReason
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\PreviewStatusReason|null
    */
    public function getStatusReason()
    {
        return $this->container['statusReason'];
    }

    /**
    * Sets statusReason
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\PreviewStatusReason|null $statusReason statusReason
    *
    * @return $this
    */
    public function setStatusReason($statusReason)
    {
        $this->container['statusReason'] = $statusReason;
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

