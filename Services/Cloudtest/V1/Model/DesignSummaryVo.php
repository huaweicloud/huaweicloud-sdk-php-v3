<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DesignSummaryVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DesignSummaryVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * issueNum  需求总数
    * issueCoverNum  已覆盖需求数
    * caseNum  用例数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'issueNum' => 'int',
            'issueCoverNum' => 'int',
            'caseNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * issueNum  需求总数
    * issueCoverNum  已覆盖需求数
    * caseNum  用例数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'issueNum' => 'int32',
        'issueCoverNum' => 'int32',
        'caseNum' => 'int32'
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
    * issueNum  需求总数
    * issueCoverNum  已覆盖需求数
    * caseNum  用例数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'issueNum' => 'issue_num',
            'issueCoverNum' => 'issue_cover_num',
            'caseNum' => 'case_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * issueNum  需求总数
    * issueCoverNum  已覆盖需求数
    * caseNum  用例数
    *
    * @var string[]
    */
    protected static $setters = [
            'issueNum' => 'setIssueNum',
            'issueCoverNum' => 'setIssueCoverNum',
            'caseNum' => 'setCaseNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * issueNum  需求总数
    * issueCoverNum  已覆盖需求数
    * caseNum  用例数
    *
    * @var string[]
    */
    protected static $getters = [
            'issueNum' => 'getIssueNum',
            'issueCoverNum' => 'getIssueCoverNum',
            'caseNum' => 'getCaseNum'
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
        $this->container['issueNum'] = isset($data['issueNum']) ? $data['issueNum'] : null;
        $this->container['issueCoverNum'] = isset($data['issueCoverNum']) ? $data['issueCoverNum'] : null;
        $this->container['caseNum'] = isset($data['caseNum']) ? $data['caseNum'] : null;
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
    * Gets issueNum
    *  需求总数
    *
    * @return int|null
    */
    public function getIssueNum()
    {
        return $this->container['issueNum'];
    }

    /**
    * Sets issueNum
    *
    * @param int|null $issueNum 需求总数
    *
    * @return $this
    */
    public function setIssueNum($issueNum)
    {
        $this->container['issueNum'] = $issueNum;
        return $this;
    }

    /**
    * Gets issueCoverNum
    *  已覆盖需求数
    *
    * @return int|null
    */
    public function getIssueCoverNum()
    {
        return $this->container['issueCoverNum'];
    }

    /**
    * Sets issueCoverNum
    *
    * @param int|null $issueCoverNum 已覆盖需求数
    *
    * @return $this
    */
    public function setIssueCoverNum($issueCoverNum)
    {
        $this->container['issueCoverNum'] = $issueCoverNum;
        return $this;
    }

    /**
    * Gets caseNum
    *  用例数
    *
    * @return int|null
    */
    public function getCaseNum()
    {
        return $this->container['caseNum'];
    }

    /**
    * Sets caseNum
    *
    * @param int|null $caseNum 用例数
    *
    * @return $this
    */
    public function setCaseNum($caseNum)
    {
        $this->container['caseNum'] = $caseNum;
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

