<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmnTargetDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmnTargetDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * urn  主题urn
    * agencyName  委托名称
    * subjectTransform  subjectTransform
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'urn' => 'string',
            'agencyName' => 'string',
            'subjectTransform' => '\HuaweiCloud\SDK\Eg\V1\Model\SmnTargetDetailSubjectTransform'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * urn  主题urn
    * agencyName  委托名称
    * subjectTransform  subjectTransform
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'urn' => null,
        'agencyName' => null,
        'subjectTransform' => null
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
    * urn  主题urn
    * agencyName  委托名称
    * subjectTransform  subjectTransform
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'urn' => 'urn',
            'agencyName' => 'agency_name',
            'subjectTransform' => 'subject_transform'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * urn  主题urn
    * agencyName  委托名称
    * subjectTransform  subjectTransform
    *
    * @var string[]
    */
    protected static $setters = [
            'urn' => 'setUrn',
            'agencyName' => 'setAgencyName',
            'subjectTransform' => 'setSubjectTransform'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * urn  主题urn
    * agencyName  委托名称
    * subjectTransform  subjectTransform
    *
    * @var string[]
    */
    protected static $getters = [
            'urn' => 'getUrn',
            'agencyName' => 'getAgencyName',
            'subjectTransform' => 'getSubjectTransform'
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
        $this->container['urn'] = isset($data['urn']) ? $data['urn'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
        $this->container['subjectTransform'] = isset($data['subjectTransform']) ? $data['subjectTransform'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['urn'] === null) {
            $invalidProperties[] = "'urn' can't be null";
        }
        if ($this->container['agencyName'] === null) {
            $invalidProperties[] = "'agencyName' can't be null";
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
    * Gets urn
    *  主题urn
    *
    * @return string
    */
    public function getUrn()
    {
        return $this->container['urn'];
    }

    /**
    * Sets urn
    *
    * @param string $urn 主题urn
    *
    * @return $this
    */
    public function setUrn($urn)
    {
        $this->container['urn'] = $urn;
        return $this;
    }

    /**
    * Gets agencyName
    *  委托名称
    *
    * @return string
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string $agencyName 委托名称
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
        return $this;
    }

    /**
    * Gets subjectTransform
    *  subjectTransform
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\SmnTargetDetailSubjectTransform|null
    */
    public function getSubjectTransform()
    {
        return $this->container['subjectTransform'];
    }

    /**
    * Sets subjectTransform
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\SmnTargetDetailSubjectTransform|null $subjectTransform subjectTransform
    *
    * @return $this
    */
    public function setSubjectTransform($subjectTransform)
    {
        $this->container['subjectTransform'] = $subjectTransform;
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

