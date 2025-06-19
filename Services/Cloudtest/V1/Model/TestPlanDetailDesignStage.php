<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestPlanDetailDesignStage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestPlanDetail_design_stage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * caseCount  用例个数
    * issueCount  需求个数
    * issueCoveredCount  已被用例关联的需求个数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'caseCount' => 'int',
            'issueCount' => 'int',
            'issueCoveredCount' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * caseCount  用例个数
    * issueCount  需求个数
    * issueCoveredCount  已被用例关联的需求个数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'caseCount' => 'int32',
        'issueCount' => 'int32',
        'issueCoveredCount' => null
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
    * caseCount  用例个数
    * issueCount  需求个数
    * issueCoveredCount  已被用例关联的需求个数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'caseCount' => 'case_count',
            'issueCount' => 'issue_count',
            'issueCoveredCount' => 'issue_covered_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * caseCount  用例个数
    * issueCount  需求个数
    * issueCoveredCount  已被用例关联的需求个数
    *
    * @var string[]
    */
    protected static $setters = [
            'caseCount' => 'setCaseCount',
            'issueCount' => 'setIssueCount',
            'issueCoveredCount' => 'setIssueCoveredCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * caseCount  用例个数
    * issueCount  需求个数
    * issueCoveredCount  已被用例关联的需求个数
    *
    * @var string[]
    */
    protected static $getters = [
            'caseCount' => 'getCaseCount',
            'issueCount' => 'getIssueCount',
            'issueCoveredCount' => 'getIssueCoveredCount'
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
        $this->container['caseCount'] = isset($data['caseCount']) ? $data['caseCount'] : null;
        $this->container['issueCount'] = isset($data['issueCount']) ? $data['issueCount'] : null;
        $this->container['issueCoveredCount'] = isset($data['issueCoveredCount']) ? $data['issueCoveredCount'] : null;
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
    * Gets caseCount
    *  用例个数
    *
    * @return int|null
    */
    public function getCaseCount()
    {
        return $this->container['caseCount'];
    }

    /**
    * Sets caseCount
    *
    * @param int|null $caseCount 用例个数
    *
    * @return $this
    */
    public function setCaseCount($caseCount)
    {
        $this->container['caseCount'] = $caseCount;
        return $this;
    }

    /**
    * Gets issueCount
    *  需求个数
    *
    * @return int|null
    */
    public function getIssueCount()
    {
        return $this->container['issueCount'];
    }

    /**
    * Sets issueCount
    *
    * @param int|null $issueCount 需求个数
    *
    * @return $this
    */
    public function setIssueCount($issueCount)
    {
        $this->container['issueCount'] = $issueCount;
        return $this;
    }

    /**
    * Gets issueCoveredCount
    *  已被用例关联的需求个数
    *
    * @return string|null
    */
    public function getIssueCoveredCount()
    {
        return $this->container['issueCoveredCount'];
    }

    /**
    * Sets issueCoveredCount
    *
    * @param string|null $issueCoveredCount 已被用例关联的需求个数
    *
    * @return $this
    */
    public function setIssueCoveredCount($issueCoveredCount)
    {
        $this->container['issueCoveredCount'] = $issueCoveredCount;
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

