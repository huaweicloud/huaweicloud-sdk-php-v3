<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowProjectDataDashboardResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowProjectDataDashboardResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * defect  defect
    * casePassRate  casePassRate
    * caseCompletionRate  caseCompletionRate
    * projectType  项目类型
    * issueCoverRate  issueCoverRate
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'defect' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\DefectVo',
            'casePassRate' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CasePassRateVo',
            'caseCompletionRate' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CaseCompletionRateVo',
            'projectType' => 'string',
            'issueCoverRate' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\IssueCoverRateVo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * defect  defect
    * casePassRate  casePassRate
    * caseCompletionRate  caseCompletionRate
    * projectType  项目类型
    * issueCoverRate  issueCoverRate
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'defect' => null,
        'casePassRate' => null,
        'caseCompletionRate' => null,
        'projectType' => null,
        'issueCoverRate' => null
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
    * defect  defect
    * casePassRate  casePassRate
    * caseCompletionRate  caseCompletionRate
    * projectType  项目类型
    * issueCoverRate  issueCoverRate
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'defect' => 'defect',
            'casePassRate' => 'case_pass_rate',
            'caseCompletionRate' => 'case_completion_rate',
            'projectType' => 'project_type',
            'issueCoverRate' => 'issue_cover_rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * defect  defect
    * casePassRate  casePassRate
    * caseCompletionRate  caseCompletionRate
    * projectType  项目类型
    * issueCoverRate  issueCoverRate
    *
    * @var string[]
    */
    protected static $setters = [
            'defect' => 'setDefect',
            'casePassRate' => 'setCasePassRate',
            'caseCompletionRate' => 'setCaseCompletionRate',
            'projectType' => 'setProjectType',
            'issueCoverRate' => 'setIssueCoverRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * defect  defect
    * casePassRate  casePassRate
    * caseCompletionRate  caseCompletionRate
    * projectType  项目类型
    * issueCoverRate  issueCoverRate
    *
    * @var string[]
    */
    protected static $getters = [
            'defect' => 'getDefect',
            'casePassRate' => 'getCasePassRate',
            'caseCompletionRate' => 'getCaseCompletionRate',
            'projectType' => 'getProjectType',
            'issueCoverRate' => 'getIssueCoverRate'
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
        $this->container['defect'] = isset($data['defect']) ? $data['defect'] : null;
        $this->container['casePassRate'] = isset($data['casePassRate']) ? $data['casePassRate'] : null;
        $this->container['caseCompletionRate'] = isset($data['caseCompletionRate']) ? $data['caseCompletionRate'] : null;
        $this->container['projectType'] = isset($data['projectType']) ? $data['projectType'] : null;
        $this->container['issueCoverRate'] = isset($data['issueCoverRate']) ? $data['issueCoverRate'] : null;
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
    * Gets defect
    *  defect
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\DefectVo|null
    */
    public function getDefect()
    {
        return $this->container['defect'];
    }

    /**
    * Sets defect
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\DefectVo|null $defect defect
    *
    * @return $this
    */
    public function setDefect($defect)
    {
        $this->container['defect'] = $defect;
        return $this;
    }

    /**
    * Gets casePassRate
    *  casePassRate
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CasePassRateVo|null
    */
    public function getCasePassRate()
    {
        return $this->container['casePassRate'];
    }

    /**
    * Sets casePassRate
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CasePassRateVo|null $casePassRate casePassRate
    *
    * @return $this
    */
    public function setCasePassRate($casePassRate)
    {
        $this->container['casePassRate'] = $casePassRate;
        return $this;
    }

    /**
    * Gets caseCompletionRate
    *  caseCompletionRate
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CaseCompletionRateVo|null
    */
    public function getCaseCompletionRate()
    {
        return $this->container['caseCompletionRate'];
    }

    /**
    * Sets caseCompletionRate
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CaseCompletionRateVo|null $caseCompletionRate caseCompletionRate
    *
    * @return $this
    */
    public function setCaseCompletionRate($caseCompletionRate)
    {
        $this->container['caseCompletionRate'] = $caseCompletionRate;
        return $this;
    }

    /**
    * Gets projectType
    *  项目类型
    *
    * @return string|null
    */
    public function getProjectType()
    {
        return $this->container['projectType'];
    }

    /**
    * Sets projectType
    *
    * @param string|null $projectType 项目类型
    *
    * @return $this
    */
    public function setProjectType($projectType)
    {
        $this->container['projectType'] = $projectType;
        return $this;
    }

    /**
    * Gets issueCoverRate
    *  issueCoverRate
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\IssueCoverRateVo|null
    */
    public function getIssueCoverRate()
    {
        return $this->container['issueCoverRate'];
    }

    /**
    * Sets issueCoverRate
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\IssueCoverRateVo|null $issueCoverRate issueCoverRate
    *
    * @return $this
    */
    public function setIssueCoverRate($issueCoverRate)
    {
        $this->container['issueCoverRate'] = $issueCoverRate;
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

