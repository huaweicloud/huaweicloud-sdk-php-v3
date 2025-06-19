<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReportSummaryVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReportSummaryVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * caseSuccessRate  用例通过率
    * caseCompleteRate  用例完成率
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'caseSuccessRate' => 'string',
            'caseCompleteRate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * caseSuccessRate  用例通过率
    * caseCompleteRate  用例完成率
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'caseSuccessRate' => null,
        'caseCompleteRate' => null
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
    * caseSuccessRate  用例通过率
    * caseCompleteRate  用例完成率
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'caseSuccessRate' => 'case_success_rate',
            'caseCompleteRate' => 'case_complete_rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * caseSuccessRate  用例通过率
    * caseCompleteRate  用例完成率
    *
    * @var string[]
    */
    protected static $setters = [
            'caseSuccessRate' => 'setCaseSuccessRate',
            'caseCompleteRate' => 'setCaseCompleteRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * caseSuccessRate  用例通过率
    * caseCompleteRate  用例完成率
    *
    * @var string[]
    */
    protected static $getters = [
            'caseSuccessRate' => 'getCaseSuccessRate',
            'caseCompleteRate' => 'getCaseCompleteRate'
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
        $this->container['caseSuccessRate'] = isset($data['caseSuccessRate']) ? $data['caseSuccessRate'] : null;
        $this->container['caseCompleteRate'] = isset($data['caseCompleteRate']) ? $data['caseCompleteRate'] : null;
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
    * Gets caseSuccessRate
    *  用例通过率
    *
    * @return string|null
    */
    public function getCaseSuccessRate()
    {
        return $this->container['caseSuccessRate'];
    }

    /**
    * Sets caseSuccessRate
    *
    * @param string|null $caseSuccessRate 用例通过率
    *
    * @return $this
    */
    public function setCaseSuccessRate($caseSuccessRate)
    {
        $this->container['caseSuccessRate'] = $caseSuccessRate;
        return $this;
    }

    /**
    * Gets caseCompleteRate
    *  用例完成率
    *
    * @return string|null
    */
    public function getCaseCompleteRate()
    {
        return $this->container['caseCompleteRate'];
    }

    /**
    * Sets caseCompleteRate
    *
    * @param string|null $caseCompleteRate 用例完成率
    *
    * @return $this
    */
    public function setCaseCompleteRate($caseCompleteRate)
    {
        $this->container['caseCompleteRate'] = $caseCompleteRate;
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

