<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceReportResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceReportResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobReportBaseInfo  jobReportBaseInfo
    * jobReportEnv  jobReportEnv
    * jobReportOutput  jobReportOutput
    * jobReportPartners  合作方信息
    * roundDeploys  计算过程
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobReportBaseInfo' => '\HuaweiCloud\SDK\Tics\V1\Model\JobReportBaseInfoVo',
            'jobReportEnv' => '\HuaweiCloud\SDK\Tics\V1\Model\JobReportEnvVo',
            'jobReportOutput' => '\HuaweiCloud\SDK\Tics\V1\Model\JobReportOutputVo',
            'jobReportPartners' => '\HuaweiCloud\SDK\Tics\V1\Model\JobReportPartnerVo[]',
            'roundDeploys' => '\HuaweiCloud\SDK\Tics\V1\Model\RoundDeployVo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobReportBaseInfo  jobReportBaseInfo
    * jobReportEnv  jobReportEnv
    * jobReportOutput  jobReportOutput
    * jobReportPartners  合作方信息
    * roundDeploys  计算过程
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobReportBaseInfo' => null,
        'jobReportEnv' => null,
        'jobReportOutput' => null,
        'jobReportPartners' => null,
        'roundDeploys' => null
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
    * jobReportBaseInfo  jobReportBaseInfo
    * jobReportEnv  jobReportEnv
    * jobReportOutput  jobReportOutput
    * jobReportPartners  合作方信息
    * roundDeploys  计算过程
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobReportBaseInfo' => 'job_report_base_info',
            'jobReportEnv' => 'job_report_env',
            'jobReportOutput' => 'job_report_output',
            'jobReportPartners' => 'job_report_partners',
            'roundDeploys' => 'round_deploys'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobReportBaseInfo  jobReportBaseInfo
    * jobReportEnv  jobReportEnv
    * jobReportOutput  jobReportOutput
    * jobReportPartners  合作方信息
    * roundDeploys  计算过程
    *
    * @var string[]
    */
    protected static $setters = [
            'jobReportBaseInfo' => 'setJobReportBaseInfo',
            'jobReportEnv' => 'setJobReportEnv',
            'jobReportOutput' => 'setJobReportOutput',
            'jobReportPartners' => 'setJobReportPartners',
            'roundDeploys' => 'setRoundDeploys'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobReportBaseInfo  jobReportBaseInfo
    * jobReportEnv  jobReportEnv
    * jobReportOutput  jobReportOutput
    * jobReportPartners  合作方信息
    * roundDeploys  计算过程
    *
    * @var string[]
    */
    protected static $getters = [
            'jobReportBaseInfo' => 'getJobReportBaseInfo',
            'jobReportEnv' => 'getJobReportEnv',
            'jobReportOutput' => 'getJobReportOutput',
            'jobReportPartners' => 'getJobReportPartners',
            'roundDeploys' => 'getRoundDeploys'
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
        $this->container['jobReportBaseInfo'] = isset($data['jobReportBaseInfo']) ? $data['jobReportBaseInfo'] : null;
        $this->container['jobReportEnv'] = isset($data['jobReportEnv']) ? $data['jobReportEnv'] : null;
        $this->container['jobReportOutput'] = isset($data['jobReportOutput']) ? $data['jobReportOutput'] : null;
        $this->container['jobReportPartners'] = isset($data['jobReportPartners']) ? $data['jobReportPartners'] : null;
        $this->container['roundDeploys'] = isset($data['roundDeploys']) ? $data['roundDeploys'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets jobReportBaseInfo
    *  jobReportBaseInfo
    *
    * @return \HuaweiCloud\SDK\Tics\V1\Model\JobReportBaseInfoVo|null
    */
    public function getJobReportBaseInfo()
    {
        return $this->container['jobReportBaseInfo'];
    }

    /**
    * Sets jobReportBaseInfo
    *
    * @param \HuaweiCloud\SDK\Tics\V1\Model\JobReportBaseInfoVo|null $jobReportBaseInfo jobReportBaseInfo
    *
    * @return $this
    */
    public function setJobReportBaseInfo($jobReportBaseInfo)
    {
        $this->container['jobReportBaseInfo'] = $jobReportBaseInfo;
        return $this;
    }

    /**
    * Gets jobReportEnv
    *  jobReportEnv
    *
    * @return \HuaweiCloud\SDK\Tics\V1\Model\JobReportEnvVo|null
    */
    public function getJobReportEnv()
    {
        return $this->container['jobReportEnv'];
    }

    /**
    * Sets jobReportEnv
    *
    * @param \HuaweiCloud\SDK\Tics\V1\Model\JobReportEnvVo|null $jobReportEnv jobReportEnv
    *
    * @return $this
    */
    public function setJobReportEnv($jobReportEnv)
    {
        $this->container['jobReportEnv'] = $jobReportEnv;
        return $this;
    }

    /**
    * Gets jobReportOutput
    *  jobReportOutput
    *
    * @return \HuaweiCloud\SDK\Tics\V1\Model\JobReportOutputVo|null
    */
    public function getJobReportOutput()
    {
        return $this->container['jobReportOutput'];
    }

    /**
    * Sets jobReportOutput
    *
    * @param \HuaweiCloud\SDK\Tics\V1\Model\JobReportOutputVo|null $jobReportOutput jobReportOutput
    *
    * @return $this
    */
    public function setJobReportOutput($jobReportOutput)
    {
        $this->container['jobReportOutput'] = $jobReportOutput;
        return $this;
    }

    /**
    * Gets jobReportPartners
    *  合作方信息
    *
    * @return \HuaweiCloud\SDK\Tics\V1\Model\JobReportPartnerVo[]|null
    */
    public function getJobReportPartners()
    {
        return $this->container['jobReportPartners'];
    }

    /**
    * Sets jobReportPartners
    *
    * @param \HuaweiCloud\SDK\Tics\V1\Model\JobReportPartnerVo[]|null $jobReportPartners 合作方信息
    *
    * @return $this
    */
    public function setJobReportPartners($jobReportPartners)
    {
        $this->container['jobReportPartners'] = $jobReportPartners;
        return $this;
    }

    /**
    * Gets roundDeploys
    *  计算过程
    *
    * @return \HuaweiCloud\SDK\Tics\V1\Model\RoundDeployVo[]|null
    */
    public function getRoundDeploys()
    {
        return $this->container['roundDeploys'];
    }

    /**
    * Sets roundDeploys
    *
    * @param \HuaweiCloud\SDK\Tics\V1\Model\RoundDeployVo[]|null $roundDeploys 计算过程
    *
    * @return $this
    */
    public function setRoundDeploys($roundDeploys)
    {
        $this->container['roundDeploys'] = $roundDeploys;
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

