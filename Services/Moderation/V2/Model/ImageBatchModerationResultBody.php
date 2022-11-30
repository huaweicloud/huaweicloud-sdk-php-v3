<?php

namespace HuaweiCloud\SDK\Moderation\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageBatchModerationResultBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageBatchModerationResultBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  图片的URL路径。
    * suggestion  检测结果是否通过。 - block：包含敏感信息，不通过 - pass：不包含敏感信息，通过 - review：需要人工复检 > 当同时检测多个场景时，suggestion的值以最可能包含敏感信息的场景为准。即任一场景出现了block则总的suggestion为block，所有场景都pass时suggestion为pass，这两种情况之外则一定有场景需要review，此时suggestion为review。
    * detail  detail
    * categorySuggestions  具体每个场景的检测结果。  block：包含敏感信息，不通过  pass：不包含敏感信息，通过  review：需要人工复检
    * ocrText  ocr识别结果。
    * errorCode  图像审核失败时错误码
    * errorMsg  图像审核失败时错误信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'suggestion' => 'string',
            'detail' => '\HuaweiCloud\SDK\Moderation\V2\Model\ImageDetectionResultDetail',
            'categorySuggestions' => 'object',
            'ocrText' => 'string',
            'errorCode' => 'string',
            'errorMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  图片的URL路径。
    * suggestion  检测结果是否通过。 - block：包含敏感信息，不通过 - pass：不包含敏感信息，通过 - review：需要人工复检 > 当同时检测多个场景时，suggestion的值以最可能包含敏感信息的场景为准。即任一场景出现了block则总的suggestion为block，所有场景都pass时suggestion为pass，这两种情况之外则一定有场景需要review，此时suggestion为review。
    * detail  detail
    * categorySuggestions  具体每个场景的检测结果。  block：包含敏感信息，不通过  pass：不包含敏感信息，通过  review：需要人工复检
    * ocrText  ocr识别结果。
    * errorCode  图像审核失败时错误码
    * errorMsg  图像审核失败时错误信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'suggestion' => null,
        'detail' => null,
        'categorySuggestions' => null,
        'ocrText' => null,
        'errorCode' => null,
        'errorMsg' => null
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
    * url  图片的URL路径。
    * suggestion  检测结果是否通过。 - block：包含敏感信息，不通过 - pass：不包含敏感信息，通过 - review：需要人工复检 > 当同时检测多个场景时，suggestion的值以最可能包含敏感信息的场景为准。即任一场景出现了block则总的suggestion为block，所有场景都pass时suggestion为pass，这两种情况之外则一定有场景需要review，此时suggestion为review。
    * detail  detail
    * categorySuggestions  具体每个场景的检测结果。  block：包含敏感信息，不通过  pass：不包含敏感信息，通过  review：需要人工复检
    * ocrText  ocr识别结果。
    * errorCode  图像审核失败时错误码
    * errorMsg  图像审核失败时错误信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'suggestion' => 'suggestion',
            'detail' => 'detail',
            'categorySuggestions' => 'category_suggestions',
            'ocrText' => 'ocr_text',
            'errorCode' => 'error_code',
            'errorMsg' => 'error_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  图片的URL路径。
    * suggestion  检测结果是否通过。 - block：包含敏感信息，不通过 - pass：不包含敏感信息，通过 - review：需要人工复检 > 当同时检测多个场景时，suggestion的值以最可能包含敏感信息的场景为准。即任一场景出现了block则总的suggestion为block，所有场景都pass时suggestion为pass，这两种情况之外则一定有场景需要review，此时suggestion为review。
    * detail  detail
    * categorySuggestions  具体每个场景的检测结果。  block：包含敏感信息，不通过  pass：不包含敏感信息，通过  review：需要人工复检
    * ocrText  ocr识别结果。
    * errorCode  图像审核失败时错误码
    * errorMsg  图像审核失败时错误信息
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'suggestion' => 'setSuggestion',
            'detail' => 'setDetail',
            'categorySuggestions' => 'setCategorySuggestions',
            'ocrText' => 'setOcrText',
            'errorCode' => 'setErrorCode',
            'errorMsg' => 'setErrorMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  图片的URL路径。
    * suggestion  检测结果是否通过。 - block：包含敏感信息，不通过 - pass：不包含敏感信息，通过 - review：需要人工复检 > 当同时检测多个场景时，suggestion的值以最可能包含敏感信息的场景为准。即任一场景出现了block则总的suggestion为block，所有场景都pass时suggestion为pass，这两种情况之外则一定有场景需要review，此时suggestion为review。
    * detail  detail
    * categorySuggestions  具体每个场景的检测结果。  block：包含敏感信息，不通过  pass：不包含敏感信息，通过  review：需要人工复检
    * ocrText  ocr识别结果。
    * errorCode  图像审核失败时错误码
    * errorMsg  图像审核失败时错误信息
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'suggestion' => 'getSuggestion',
            'detail' => 'getDetail',
            'categorySuggestions' => 'getCategorySuggestions',
            'ocrText' => 'getOcrText',
            'errorCode' => 'getErrorCode',
            'errorMsg' => 'getErrorMsg'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['suggestion'] = isset($data['suggestion']) ? $data['suggestion'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['categorySuggestions'] = isset($data['categorySuggestions']) ? $data['categorySuggestions'] : null;
        $this->container['ocrText'] = isset($data['ocrText']) ? $data['ocrText'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
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
    * Gets url
    *  图片的URL路径。
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 图片的URL路径。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets suggestion
    *  检测结果是否通过。 - block：包含敏感信息，不通过 - pass：不包含敏感信息，通过 - review：需要人工复检 > 当同时检测多个场景时，suggestion的值以最可能包含敏感信息的场景为准。即任一场景出现了block则总的suggestion为block，所有场景都pass时suggestion为pass，这两种情况之外则一定有场景需要review，此时suggestion为review。
    *
    * @return string|null
    */
    public function getSuggestion()
    {
        return $this->container['suggestion'];
    }

    /**
    * Sets suggestion
    *
    * @param string|null $suggestion 检测结果是否通过。 - block：包含敏感信息，不通过 - pass：不包含敏感信息，通过 - review：需要人工复检 > 当同时检测多个场景时，suggestion的值以最可能包含敏感信息的场景为准。即任一场景出现了block则总的suggestion为block，所有场景都pass时suggestion为pass，这两种情况之外则一定有场景需要review，此时suggestion为review。
    *
    * @return $this
    */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;
        return $this;
    }

    /**
    * Gets detail
    *  detail
    *
    * @return \HuaweiCloud\SDK\Moderation\V2\Model\ImageDetectionResultDetail|null
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param \HuaweiCloud\SDK\Moderation\V2\Model\ImageDetectionResultDetail|null $detail detail
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
        return $this;
    }

    /**
    * Gets categorySuggestions
    *  具体每个场景的检测结果。  block：包含敏感信息，不通过  pass：不包含敏感信息，通过  review：需要人工复检
    *
    * @return object|null
    */
    public function getCategorySuggestions()
    {
        return $this->container['categorySuggestions'];
    }

    /**
    * Sets categorySuggestions
    *
    * @param object|null $categorySuggestions 具体每个场景的检测结果。  block：包含敏感信息，不通过  pass：不包含敏感信息，通过  review：需要人工复检
    *
    * @return $this
    */
    public function setCategorySuggestions($categorySuggestions)
    {
        $this->container['categorySuggestions'] = $categorySuggestions;
        return $this;
    }

    /**
    * Gets ocrText
    *  ocr识别结果。
    *
    * @return string|null
    */
    public function getOcrText()
    {
        return $this->container['ocrText'];
    }

    /**
    * Sets ocrText
    *
    * @param string|null $ocrText ocr识别结果。
    *
    * @return $this
    */
    public function setOcrText($ocrText)
    {
        $this->container['ocrText'] = $ocrText;
        return $this;
    }

    /**
    * Gets errorCode
    *  图像审核失败时错误码
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 图像审核失败时错误码
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMsg
    *  图像审核失败时错误信息
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 图像审核失败时错误信息
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
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

