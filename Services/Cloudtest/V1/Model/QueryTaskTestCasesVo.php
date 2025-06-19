<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryTaskTestCasesVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryTaskTestCasesVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * relatedCaseUris  关联的用例uris
    * notRelatedCaseUris  未关联的用例uris
    * caseTaskInfo  用例及任务信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'relatedCaseUris' => 'string[]',
            'notRelatedCaseUris' => 'string[]',
            'caseTaskInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\RelateTaskTestCasesVo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * relatedCaseUris  关联的用例uris
    * notRelatedCaseUris  未关联的用例uris
    * caseTaskInfo  用例及任务信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'relatedCaseUris' => null,
        'notRelatedCaseUris' => null,
        'caseTaskInfo' => null
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
    * relatedCaseUris  关联的用例uris
    * notRelatedCaseUris  未关联的用例uris
    * caseTaskInfo  用例及任务信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'relatedCaseUris' => 'related_case_uris',
            'notRelatedCaseUris' => 'not_related_case_uris',
            'caseTaskInfo' => 'case_task_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * relatedCaseUris  关联的用例uris
    * notRelatedCaseUris  未关联的用例uris
    * caseTaskInfo  用例及任务信息
    *
    * @var string[]
    */
    protected static $setters = [
            'relatedCaseUris' => 'setRelatedCaseUris',
            'notRelatedCaseUris' => 'setNotRelatedCaseUris',
            'caseTaskInfo' => 'setCaseTaskInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * relatedCaseUris  关联的用例uris
    * notRelatedCaseUris  未关联的用例uris
    * caseTaskInfo  用例及任务信息
    *
    * @var string[]
    */
    protected static $getters = [
            'relatedCaseUris' => 'getRelatedCaseUris',
            'notRelatedCaseUris' => 'getNotRelatedCaseUris',
            'caseTaskInfo' => 'getCaseTaskInfo'
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
        $this->container['relatedCaseUris'] = isset($data['relatedCaseUris']) ? $data['relatedCaseUris'] : null;
        $this->container['notRelatedCaseUris'] = isset($data['notRelatedCaseUris']) ? $data['notRelatedCaseUris'] : null;
        $this->container['caseTaskInfo'] = isset($data['caseTaskInfo']) ? $data['caseTaskInfo'] : null;
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
    * Gets relatedCaseUris
    *  关联的用例uris
    *
    * @return string[]|null
    */
    public function getRelatedCaseUris()
    {
        return $this->container['relatedCaseUris'];
    }

    /**
    * Sets relatedCaseUris
    *
    * @param string[]|null $relatedCaseUris 关联的用例uris
    *
    * @return $this
    */
    public function setRelatedCaseUris($relatedCaseUris)
    {
        $this->container['relatedCaseUris'] = $relatedCaseUris;
        return $this;
    }

    /**
    * Gets notRelatedCaseUris
    *  未关联的用例uris
    *
    * @return string[]|null
    */
    public function getNotRelatedCaseUris()
    {
        return $this->container['notRelatedCaseUris'];
    }

    /**
    * Sets notRelatedCaseUris
    *
    * @param string[]|null $notRelatedCaseUris 未关联的用例uris
    *
    * @return $this
    */
    public function setNotRelatedCaseUris($notRelatedCaseUris)
    {
        $this->container['notRelatedCaseUris'] = $notRelatedCaseUris;
        return $this;
    }

    /**
    * Gets caseTaskInfo
    *  用例及任务信息
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\RelateTaskTestCasesVo[]|null
    */
    public function getCaseTaskInfo()
    {
        return $this->container['caseTaskInfo'];
    }

    /**
    * Sets caseTaskInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\RelateTaskTestCasesVo[]|null $caseTaskInfo 用例及任务信息
    *
    * @return $this
    */
    public function setCaseTaskInfo($caseTaskInfo)
    {
        $this->container['caseTaskInfo'] = $caseTaskInfo;
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

