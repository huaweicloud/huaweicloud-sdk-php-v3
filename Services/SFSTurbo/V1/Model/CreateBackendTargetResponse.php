<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateBackendTargetResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateBackendTargetResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetId  绑定关系id
    * creationTime  绑定关系创建时间
    * failureDetails  failureDetails
    * fileSystemPath  联动目录名称
    * lifecycle  绑定状态。  如果返回状态为CREATING，您需要通过获取后端存储详细信息接口去轮询绑定完成状态。  如果返回状态为AVAILABLE，代表绑定后端存储成功。  如果返回状态MISCONFIGURED，代表绑定后端存储失败。DELETING 状态暂不支持。
    * obs  obs
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetId' => 'string',
            'creationTime' => 'string',
            'failureDetails' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\FailureDetailsMessage',
            'fileSystemPath' => 'string',
            'lifecycle' => 'string',
            'obs' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\ObsDataRepository',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetId  绑定关系id
    * creationTime  绑定关系创建时间
    * failureDetails  failureDetails
    * fileSystemPath  联动目录名称
    * lifecycle  绑定状态。  如果返回状态为CREATING，您需要通过获取后端存储详细信息接口去轮询绑定完成状态。  如果返回状态为AVAILABLE，代表绑定后端存储成功。  如果返回状态MISCONFIGURED，代表绑定后端存储失败。DELETING 状态暂不支持。
    * obs  obs
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetId' => null,
        'creationTime' => null,
        'failureDetails' => null,
        'fileSystemPath' => null,
        'lifecycle' => null,
        'obs' => null,
        'xRequestId' => null
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
    * targetId  绑定关系id
    * creationTime  绑定关系创建时间
    * failureDetails  failureDetails
    * fileSystemPath  联动目录名称
    * lifecycle  绑定状态。  如果返回状态为CREATING，您需要通过获取后端存储详细信息接口去轮询绑定完成状态。  如果返回状态为AVAILABLE，代表绑定后端存储成功。  如果返回状态MISCONFIGURED，代表绑定后端存储失败。DELETING 状态暂不支持。
    * obs  obs
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetId' => 'target_id',
            'creationTime' => 'creation_time',
            'failureDetails' => 'failure_details',
            'fileSystemPath' => 'file_system_path',
            'lifecycle' => 'lifecycle',
            'obs' => 'obs',
            'xRequestId' => 'X-request-id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetId  绑定关系id
    * creationTime  绑定关系创建时间
    * failureDetails  failureDetails
    * fileSystemPath  联动目录名称
    * lifecycle  绑定状态。  如果返回状态为CREATING，您需要通过获取后端存储详细信息接口去轮询绑定完成状态。  如果返回状态为AVAILABLE，代表绑定后端存储成功。  如果返回状态MISCONFIGURED，代表绑定后端存储失败。DELETING 状态暂不支持。
    * obs  obs
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'targetId' => 'setTargetId',
            'creationTime' => 'setCreationTime',
            'failureDetails' => 'setFailureDetails',
            'fileSystemPath' => 'setFileSystemPath',
            'lifecycle' => 'setLifecycle',
            'obs' => 'setObs',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetId  绑定关系id
    * creationTime  绑定关系创建时间
    * failureDetails  failureDetails
    * fileSystemPath  联动目录名称
    * lifecycle  绑定状态。  如果返回状态为CREATING，您需要通过获取后端存储详细信息接口去轮询绑定完成状态。  如果返回状态为AVAILABLE，代表绑定后端存储成功。  如果返回状态MISCONFIGURED，代表绑定后端存储失败。DELETING 状态暂不支持。
    * obs  obs
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'targetId' => 'getTargetId',
            'creationTime' => 'getCreationTime',
            'failureDetails' => 'getFailureDetails',
            'fileSystemPath' => 'getFileSystemPath',
            'lifecycle' => 'getLifecycle',
            'obs' => 'getObs',
            'xRequestId' => 'getXRequestId'
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
    const LIFECYCLE_CREATING = 'CREATING';
    const LIFECYCLE_AVAILABLE = 'AVAILABLE';
    const LIFECYCLE_MISCONFIGURED = 'MISCONFIGURED';
    const LIFECYCLE_DELETING = 'DELETING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLifecycleAllowableValues()
    {
        return [
            self::LIFECYCLE_CREATING,
            self::LIFECYCLE_AVAILABLE,
            self::LIFECYCLE_MISCONFIGURED,
            self::LIFECYCLE_DELETING,
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
        $this->container['targetId'] = isset($data['targetId']) ? $data['targetId'] : null;
        $this->container['creationTime'] = isset($data['creationTime']) ? $data['creationTime'] : null;
        $this->container['failureDetails'] = isset($data['failureDetails']) ? $data['failureDetails'] : null;
        $this->container['fileSystemPath'] = isset($data['fileSystemPath']) ? $data['fileSystemPath'] : null;
        $this->container['lifecycle'] = isset($data['lifecycle']) ? $data['lifecycle'] : null;
        $this->container['obs'] = isset($data['obs']) ? $data['obs'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getLifecycleAllowableValues();
                if (!is_null($this->container['lifecycle']) && !in_array($this->container['lifecycle'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'lifecycle', must be one of '%s'",
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
    * Gets targetId
    *  绑定关系id
    *
    * @return string|null
    */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
    * Sets targetId
    *
    * @param string|null $targetId 绑定关系id
    *
    * @return $this
    */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;
        return $this;
    }

    /**
    * Gets creationTime
    *  绑定关系创建时间
    *
    * @return string|null
    */
    public function getCreationTime()
    {
        return $this->container['creationTime'];
    }

    /**
    * Sets creationTime
    *
    * @param string|null $creationTime 绑定关系创建时间
    *
    * @return $this
    */
    public function setCreationTime($creationTime)
    {
        $this->container['creationTime'] = $creationTime;
        return $this;
    }

    /**
    * Gets failureDetails
    *  failureDetails
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\FailureDetailsMessage|null
    */
    public function getFailureDetails()
    {
        return $this->container['failureDetails'];
    }

    /**
    * Sets failureDetails
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\FailureDetailsMessage|null $failureDetails failureDetails
    *
    * @return $this
    */
    public function setFailureDetails($failureDetails)
    {
        $this->container['failureDetails'] = $failureDetails;
        return $this;
    }

    /**
    * Gets fileSystemPath
    *  联动目录名称
    *
    * @return string|null
    */
    public function getFileSystemPath()
    {
        return $this->container['fileSystemPath'];
    }

    /**
    * Sets fileSystemPath
    *
    * @param string|null $fileSystemPath 联动目录名称
    *
    * @return $this
    */
    public function setFileSystemPath($fileSystemPath)
    {
        $this->container['fileSystemPath'] = $fileSystemPath;
        return $this;
    }

    /**
    * Gets lifecycle
    *  绑定状态。  如果返回状态为CREATING，您需要通过获取后端存储详细信息接口去轮询绑定完成状态。  如果返回状态为AVAILABLE，代表绑定后端存储成功。  如果返回状态MISCONFIGURED，代表绑定后端存储失败。DELETING 状态暂不支持。
    *
    * @return string|null
    */
    public function getLifecycle()
    {
        return $this->container['lifecycle'];
    }

    /**
    * Sets lifecycle
    *
    * @param string|null $lifecycle 绑定状态。  如果返回状态为CREATING，您需要通过获取后端存储详细信息接口去轮询绑定完成状态。  如果返回状态为AVAILABLE，代表绑定后端存储成功。  如果返回状态MISCONFIGURED，代表绑定后端存储失败。DELETING 状态暂不支持。
    *
    * @return $this
    */
    public function setLifecycle($lifecycle)
    {
        $this->container['lifecycle'] = $lifecycle;
        return $this;
    }

    /**
    * Gets obs
    *  obs
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\ObsDataRepository|null
    */
    public function getObs()
    {
        return $this->container['obs'];
    }

    /**
    * Sets obs
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\ObsDataRepository|null $obs obs
    *
    * @return $this
    */
    public function setObs($obs)
    {
        $this->container['obs'] = $obs;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

