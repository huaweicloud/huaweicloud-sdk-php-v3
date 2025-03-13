<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSecurityDatasourceProtectionDiagnoseResultResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSecurityDatasourceProtectionDiagnoseResultResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  诊断任务id
    * scanning  是否正在扫描
    * checkTime  最新检测时间。
    * kerberos  kerberos
    * publicNetworkAccess  publicNetworkAccess
    * securityGroup  securityGroup
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'scanning' => 'bool',
            'checkTime' => 'int',
            'kerberos' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SecurityCertification',
            'publicNetworkAccess' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\PublicNetworkAccess',
            'securityGroup' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SecurityGroupResult'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  诊断任务id
    * scanning  是否正在扫描
    * checkTime  最新检测时间。
    * kerberos  kerberos
    * publicNetworkAccess  publicNetworkAccess
    * securityGroup  securityGroup
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'scanning' => null,
        'checkTime' => 'int64',
        'kerberos' => null,
        'publicNetworkAccess' => null,
        'securityGroup' => null
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
    * taskId  诊断任务id
    * scanning  是否正在扫描
    * checkTime  最新检测时间。
    * kerberos  kerberos
    * publicNetworkAccess  publicNetworkAccess
    * securityGroup  securityGroup
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'scanning' => 'scanning',
            'checkTime' => 'check_time',
            'kerberos' => 'kerberos',
            'publicNetworkAccess' => 'public_network_access',
            'securityGroup' => 'security_group'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  诊断任务id
    * scanning  是否正在扫描
    * checkTime  最新检测时间。
    * kerberos  kerberos
    * publicNetworkAccess  publicNetworkAccess
    * securityGroup  securityGroup
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'scanning' => 'setScanning',
            'checkTime' => 'setCheckTime',
            'kerberos' => 'setKerberos',
            'publicNetworkAccess' => 'setPublicNetworkAccess',
            'securityGroup' => 'setSecurityGroup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  诊断任务id
    * scanning  是否正在扫描
    * checkTime  最新检测时间。
    * kerberos  kerberos
    * publicNetworkAccess  publicNetworkAccess
    * securityGroup  securityGroup
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'scanning' => 'getScanning',
            'checkTime' => 'getCheckTime',
            'kerberos' => 'getKerberos',
            'publicNetworkAccess' => 'getPublicNetworkAccess',
            'securityGroup' => 'getSecurityGroup'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['scanning'] = isset($data['scanning']) ? $data['scanning'] : null;
        $this->container['checkTime'] = isset($data['checkTime']) ? $data['checkTime'] : null;
        $this->container['kerberos'] = isset($data['kerberos']) ? $data['kerberos'] : null;
        $this->container['publicNetworkAccess'] = isset($data['publicNetworkAccess']) ? $data['publicNetworkAccess'] : null;
        $this->container['securityGroup'] = isset($data['securityGroup']) ? $data['securityGroup'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 128)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['checkTime']) && ($this->container['checkTime'] > 4070880010000)) {
                $invalidProperties[] = "invalid value for 'checkTime', must be smaller than or equal to 4070880010000.";
            }
            if (!is_null($this->container['checkTime']) && ($this->container['checkTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'checkTime', must be bigger than or equal to 0.";
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
    * Gets taskId
    *  诊断任务id
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 诊断任务id
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets scanning
    *  是否正在扫描
    *
    * @return bool|null
    */
    public function getScanning()
    {
        return $this->container['scanning'];
    }

    /**
    * Sets scanning
    *
    * @param bool|null $scanning 是否正在扫描
    *
    * @return $this
    */
    public function setScanning($scanning)
    {
        $this->container['scanning'] = $scanning;
        return $this;
    }

    /**
    * Gets checkTime
    *  最新检测时间。
    *
    * @return int|null
    */
    public function getCheckTime()
    {
        return $this->container['checkTime'];
    }

    /**
    * Sets checkTime
    *
    * @param int|null $checkTime 最新检测时间。
    *
    * @return $this
    */
    public function setCheckTime($checkTime)
    {
        $this->container['checkTime'] = $checkTime;
        return $this;
    }

    /**
    * Gets kerberos
    *  kerberos
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SecurityCertification|null
    */
    public function getKerberos()
    {
        return $this->container['kerberos'];
    }

    /**
    * Sets kerberos
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SecurityCertification|null $kerberos kerberos
    *
    * @return $this
    */
    public function setKerberos($kerberos)
    {
        $this->container['kerberos'] = $kerberos;
        return $this;
    }

    /**
    * Gets publicNetworkAccess
    *  publicNetworkAccess
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\PublicNetworkAccess|null
    */
    public function getPublicNetworkAccess()
    {
        return $this->container['publicNetworkAccess'];
    }

    /**
    * Sets publicNetworkAccess
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\PublicNetworkAccess|null $publicNetworkAccess publicNetworkAccess
    *
    * @return $this
    */
    public function setPublicNetworkAccess($publicNetworkAccess)
    {
        $this->container['publicNetworkAccess'] = $publicNetworkAccess;
        return $this;
    }

    /**
    * Gets securityGroup
    *  securityGroup
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SecurityGroupResult|null
    */
    public function getSecurityGroup()
    {
        return $this->container['securityGroup'];
    }

    /**
    * Sets securityGroup
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SecurityGroupResult|null $securityGroup securityGroup
    *
    * @return $this
    */
    public function setSecurityGroup($securityGroup)
    {
        $this->container['securityGroup'] = $securityGroup;
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

