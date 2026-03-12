<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateDryRunConfigReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateDryRunConfigReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyType  试运行策略的类型名称，service_control_policy服务控制策略。
    * rootId  根的唯一标识符（ID）。
    * status  策略试运行的开启状态。enabled：启用；disabled 禁用。
    * bucketName  用户桶名称。
    * regionId  用户桶所在的region。
    * bucketPrefix  用户桶的前缀。
    * agencyName  委托名称。Organizations服务通过此委托将试运行日志写入用户obs桶
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyType' => 'string',
            'rootId' => 'string',
            'status' => 'string',
            'bucketName' => 'string',
            'regionId' => 'string',
            'bucketPrefix' => 'string',
            'agencyName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyType  试运行策略的类型名称，service_control_policy服务控制策略。
    * rootId  根的唯一标识符（ID）。
    * status  策略试运行的开启状态。enabled：启用；disabled 禁用。
    * bucketName  用户桶名称。
    * regionId  用户桶所在的region。
    * bucketPrefix  用户桶的前缀。
    * agencyName  委托名称。Organizations服务通过此委托将试运行日志写入用户obs桶
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyType' => null,
        'rootId' => null,
        'status' => null,
        'bucketName' => null,
        'regionId' => null,
        'bucketPrefix' => null,
        'agencyName' => null
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
    * policyType  试运行策略的类型名称，service_control_policy服务控制策略。
    * rootId  根的唯一标识符（ID）。
    * status  策略试运行的开启状态。enabled：启用；disabled 禁用。
    * bucketName  用户桶名称。
    * regionId  用户桶所在的region。
    * bucketPrefix  用户桶的前缀。
    * agencyName  委托名称。Organizations服务通过此委托将试运行日志写入用户obs桶
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyType' => 'policy_type',
            'rootId' => 'root_id',
            'status' => 'status',
            'bucketName' => 'bucket_name',
            'regionId' => 'region_id',
            'bucketPrefix' => 'bucket_prefix',
            'agencyName' => 'agency_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyType  试运行策略的类型名称，service_control_policy服务控制策略。
    * rootId  根的唯一标识符（ID）。
    * status  策略试运行的开启状态。enabled：启用；disabled 禁用。
    * bucketName  用户桶名称。
    * regionId  用户桶所在的region。
    * bucketPrefix  用户桶的前缀。
    * agencyName  委托名称。Organizations服务通过此委托将试运行日志写入用户obs桶
    *
    * @var string[]
    */
    protected static $setters = [
            'policyType' => 'setPolicyType',
            'rootId' => 'setRootId',
            'status' => 'setStatus',
            'bucketName' => 'setBucketName',
            'regionId' => 'setRegionId',
            'bucketPrefix' => 'setBucketPrefix',
            'agencyName' => 'setAgencyName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyType  试运行策略的类型名称，service_control_policy服务控制策略。
    * rootId  根的唯一标识符（ID）。
    * status  策略试运行的开启状态。enabled：启用；disabled 禁用。
    * bucketName  用户桶名称。
    * regionId  用户桶所在的region。
    * bucketPrefix  用户桶的前缀。
    * agencyName  委托名称。Organizations服务通过此委托将试运行日志写入用户obs桶
    *
    * @var string[]
    */
    protected static $getters = [
            'policyType' => 'getPolicyType',
            'rootId' => 'getRootId',
            'status' => 'getStatus',
            'bucketName' => 'getBucketName',
            'regionId' => 'getRegionId',
            'bucketPrefix' => 'getBucketPrefix',
            'agencyName' => 'getAgencyName'
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
    const POLICY_TYPE_SERVICE_CONTROL_POLICY = 'service_control_policy';
    const STATUS_ENABLED = 'enabled';
    const STATUS_DISABLED = 'disabled';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPolicyTypeAllowableValues()
    {
        return [
            self::POLICY_TYPE_SERVICE_CONTROL_POLICY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ENABLED,
            self::STATUS_DISABLED,
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
        $this->container['policyType'] = isset($data['policyType']) ? $data['policyType'] : null;
        $this->container['rootId'] = isset($data['rootId']) ? $data['rootId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['bucketPrefix'] = isset($data['bucketPrefix']) ? $data['bucketPrefix'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['policyType'] === null) {
            $invalidProperties[] = "'policyType' can't be null";
        }
            $allowedValues = $this->getPolicyTypeAllowableValues();
                if (!is_null($this->container['policyType']) && !in_array($this->container['policyType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'policyType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['rootId'] === null) {
            $invalidProperties[] = "'rootId' can't be null";
        }
            if ((mb_strlen($this->container['rootId']) > 34)) {
                $invalidProperties[] = "invalid value for 'rootId', the character length must be smaller than or equal to 34.";
            }
            if (!preg_match("/^r-[0-9a-z]{4,32}$/", $this->container['rootId'])) {
                $invalidProperties[] = "invalid value for 'rootId', must be conform to the pattern /^r-[0-9a-z]{4,32}$/.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['bucketName']) && (mb_strlen($this->container['bucketName']) > 64)) {
                $invalidProperties[] = "invalid value for 'bucketName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['bucketName']) && (mb_strlen($this->container['bucketName']) < 0)) {
                $invalidProperties[] = "invalid value for 'bucketName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bucketName']) && !preg_match("/^[a-z0-9-\\.]*$/", $this->container['bucketName'])) {
                $invalidProperties[] = "invalid value for 'bucketName', must be conform to the pattern /^[a-z0-9-\\.]*$/.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regionId']) && !preg_match("/^[\\w-]*$/", $this->container['regionId'])) {
                $invalidProperties[] = "invalid value for 'regionId', must be conform to the pattern /^[\\w-]*$/.";
            }
            if (!is_null($this->container['bucketPrefix']) && (mb_strlen($this->container['bucketPrefix']) > 256)) {
                $invalidProperties[] = "invalid value for 'bucketPrefix', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['bucketPrefix']) && (mb_strlen($this->container['bucketPrefix']) < 0)) {
                $invalidProperties[] = "invalid value for 'bucketPrefix', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bucketPrefix']) && !preg_match("/^(?![.\/])(?!.*_\/\/)(?!.*[\\\\:*?\\\"<>|\\u201c\\u201d\\uff1f\\uff0f\\uff3c\\uff02\\uff1c\\uff1e\\uff1a\\uff5c\\uff0a])(.*?)(?<![.\/])$/", $this->container['bucketPrefix'])) {
                $invalidProperties[] = "invalid value for 'bucketPrefix', must be conform to the pattern /^(?![.\/])(?!.*_\/\/)(?!.*[\\\\:*?\\\"<>|\\u201c\\u201d\\uff1f\\uff0f\\uff3c\\uff02\\uff1c\\uff1e\\uff1a\\uff5c\\uff0a])(.*?)(?<![.\/])$/.";
            }
            if (!is_null($this->container['agencyName']) && (mb_strlen($this->container['agencyName']) > 64)) {
                $invalidProperties[] = "invalid value for 'agencyName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['agencyName']) && (mb_strlen($this->container['agencyName']) < 0)) {
                $invalidProperties[] = "invalid value for 'agencyName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agencyName']) && !preg_match("/^[\\w+=,.@-]*$/", $this->container['agencyName'])) {
                $invalidProperties[] = "invalid value for 'agencyName', must be conform to the pattern /^[\\w+=,.@-]*$/.";
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
    * Gets policyType
    *  试运行策略的类型名称，service_control_policy服务控制策略。
    *
    * @return string
    */
    public function getPolicyType()
    {
        return $this->container['policyType'];
    }

    /**
    * Sets policyType
    *
    * @param string $policyType 试运行策略的类型名称，service_control_policy服务控制策略。
    *
    * @return $this
    */
    public function setPolicyType($policyType)
    {
        $this->container['policyType'] = $policyType;
        return $this;
    }

    /**
    * Gets rootId
    *  根的唯一标识符（ID）。
    *
    * @return string
    */
    public function getRootId()
    {
        return $this->container['rootId'];
    }

    /**
    * Sets rootId
    *
    * @param string $rootId 根的唯一标识符（ID）。
    *
    * @return $this
    */
    public function setRootId($rootId)
    {
        $this->container['rootId'] = $rootId;
        return $this;
    }

    /**
    * Gets status
    *  策略试运行的开启状态。enabled：启用；disabled 禁用。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 策略试运行的开启状态。enabled：启用；disabled 禁用。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets bucketName
    *  用户桶名称。
    *
    * @return string|null
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string|null $bucketName 用户桶名称。
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets regionId
    *  用户桶所在的region。
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 用户桶所在的region。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets bucketPrefix
    *  用户桶的前缀。
    *
    * @return string|null
    */
    public function getBucketPrefix()
    {
        return $this->container['bucketPrefix'];
    }

    /**
    * Sets bucketPrefix
    *
    * @param string|null $bucketPrefix 用户桶的前缀。
    *
    * @return $this
    */
    public function setBucketPrefix($bucketPrefix)
    {
        $this->container['bucketPrefix'] = $bucketPrefix;
        return $this;
    }

    /**
    * Gets agencyName
    *  委托名称。Organizations服务通过此委托将试运行日志写入用户obs桶
    *
    * @return string|null
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string|null $agencyName 委托名称。Organizations服务通过此委托将试运行日志写入用户obs桶
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
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

