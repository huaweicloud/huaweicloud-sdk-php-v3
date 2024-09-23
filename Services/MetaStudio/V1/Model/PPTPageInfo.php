<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PPTPageInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PPTPageInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pageNo  **参数解释**： 页面编号。 **约束限制**： 不涉及
    * fileId  **参数解释**： 页面对应图片文件ID。 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * pageContent  **参数解释**： 页面对应图片文件ID **约束限制**： 不涉及 **取值范围**： 字符长度0-2048位 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pageNo' => 'int',
            'fileId' => 'string',
            'pageContent' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pageNo  **参数解释**： 页面编号。 **约束限制**： 不涉及
    * fileId  **参数解释**： 页面对应图片文件ID。 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * pageContent  **参数解释**： 页面对应图片文件ID **约束限制**： 不涉及 **取值范围**： 字符长度0-2048位 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pageNo' => null,
        'fileId' => null,
        'pageContent' => null
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
    * pageNo  **参数解释**： 页面编号。 **约束限制**： 不涉及
    * fileId  **参数解释**： 页面对应图片文件ID。 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * pageContent  **参数解释**： 页面对应图片文件ID **约束限制**： 不涉及 **取值范围**： 字符长度0-2048位 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pageNo' => 'page_no',
            'fileId' => 'file_id',
            'pageContent' => 'page_content'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pageNo  **参数解释**： 页面编号。 **约束限制**： 不涉及
    * fileId  **参数解释**： 页面对应图片文件ID。 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * pageContent  **参数解释**： 页面对应图片文件ID **约束限制**： 不涉及 **取值范围**： 字符长度0-2048位 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'pageNo' => 'setPageNo',
            'fileId' => 'setFileId',
            'pageContent' => 'setPageContent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pageNo  **参数解释**： 页面编号。 **约束限制**： 不涉及
    * fileId  **参数解释**： 页面对应图片文件ID。 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * pageContent  **参数解释**： 页面对应图片文件ID **约束限制**： 不涉及 **取值范围**： 字符长度0-2048位 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'pageNo' => 'getPageNo',
            'fileId' => 'getFileId',
            'pageContent' => 'getPageContent'
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
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['fileId'] = isset($data['fileId']) ? $data['fileId'] : null;
        $this->container['pageContent'] = isset($data['pageContent']) ? $data['pageContent'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['pageNo']) && ($this->container['pageNo'] > 256)) {
                $invalidProperties[] = "invalid value for 'pageNo', must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['pageNo']) && ($this->container['pageNo'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageNo', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileId']) && (mb_strlen($this->container['fileId']) > 64)) {
                $invalidProperties[] = "invalid value for 'fileId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fileId']) && (mb_strlen($this->container['fileId']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pageContent']) && (mb_strlen($this->container['pageContent']) > 2048)) {
                $invalidProperties[] = "invalid value for 'pageContent', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['pageContent']) && (mb_strlen($this->container['pageContent']) < 0)) {
                $invalidProperties[] = "invalid value for 'pageContent', the character length must be bigger than or equal to 0.";
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
    * Gets pageNo
    *  **参数解释**： 页面编号。 **约束限制**： 不涉及
    *
    * @return int|null
    */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
    * Sets pageNo
    *
    * @param int|null $pageNo **参数解释**： 页面编号。 **约束限制**： 不涉及
    *
    * @return $this
    */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;
        return $this;
    }

    /**
    * Gets fileId
    *  **参数解释**： 页面对应图片文件ID。 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getFileId()
    {
        return $this->container['fileId'];
    }

    /**
    * Sets fileId
    *
    * @param string|null $fileId **参数解释**： 页面对应图片文件ID。 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setFileId($fileId)
    {
        $this->container['fileId'] = $fileId;
        return $this;
    }

    /**
    * Gets pageContent
    *  **参数解释**： 页面对应图片文件ID **约束限制**： 不涉及 **取值范围**： 字符长度0-2048位 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getPageContent()
    {
        return $this->container['pageContent'];
    }

    /**
    * Sets pageContent
    *
    * @param string|null $pageContent **参数解释**： 页面对应图片文件ID **约束限制**： 不涉及 **取值范围**： 字符长度0-2048位 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPageContent($pageContent)
    {
        $this->container['pageContent'] = $pageContent;
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

