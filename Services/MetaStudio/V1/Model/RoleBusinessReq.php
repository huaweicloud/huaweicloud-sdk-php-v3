<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RoleBusinessReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RoleBusinessReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * language  language
    * prompt  提示词。
    * knowledgeLibraryList  知识库列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'language' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum',
            'prompt' => 'string',
            'knowledgeLibraryList' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\RoleKnowledgeLibraryReq[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * language  language
    * prompt  提示词。
    * knowledgeLibraryList  知识库列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'language' => null,
        'prompt' => null,
        'knowledgeLibraryList' => null
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
    * language  language
    * prompt  提示词。
    * knowledgeLibraryList  知识库列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'language' => 'language',
            'prompt' => 'prompt',
            'knowledgeLibraryList' => 'knowledge_library_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * language  language
    * prompt  提示词。
    * knowledgeLibraryList  知识库列表
    *
    * @var string[]
    */
    protected static $setters = [
            'language' => 'setLanguage',
            'prompt' => 'setPrompt',
            'knowledgeLibraryList' => 'setKnowledgeLibraryList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * language  language
    * prompt  提示词。
    * knowledgeLibraryList  知识库列表
    *
    * @var string[]
    */
    protected static $getters = [
            'language' => 'getLanguage',
            'prompt' => 'getPrompt',
            'knowledgeLibraryList' => 'getKnowledgeLibraryList'
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
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['prompt'] = isset($data['prompt']) ? $data['prompt'] : null;
        $this->container['knowledgeLibraryList'] = isset($data['knowledgeLibraryList']) ? $data['knowledgeLibraryList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
            if (!is_null($this->container['prompt']) && (mb_strlen($this->container['prompt']) > 1024)) {
                $invalidProperties[] = "invalid value for 'prompt', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['prompt']) && (mb_strlen($this->container['prompt']) < 1)) {
                $invalidProperties[] = "invalid value for 'prompt', the character length must be bigger than or equal to 1.";
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
    * Gets language
    *  language
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum $language language
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets prompt
    *  提示词。
    *
    * @return string|null
    */
    public function getPrompt()
    {
        return $this->container['prompt'];
    }

    /**
    * Sets prompt
    *
    * @param string|null $prompt 提示词。
    *
    * @return $this
    */
    public function setPrompt($prompt)
    {
        $this->container['prompt'] = $prompt;
        return $this;
    }

    /**
    * Gets knowledgeLibraryList
    *  知识库列表
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\RoleKnowledgeLibraryReq[]|null
    */
    public function getKnowledgeLibraryList()
    {
        return $this->container['knowledgeLibraryList'];
    }

    /**
    * Sets knowledgeLibraryList
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\RoleKnowledgeLibraryReq[]|null $knowledgeLibraryList 知识库列表
    *
    * @return $this
    */
    public function setKnowledgeLibraryList($knowledgeLibraryList)
    {
        $this->container['knowledgeLibraryList'] = $knowledgeLibraryList;
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

