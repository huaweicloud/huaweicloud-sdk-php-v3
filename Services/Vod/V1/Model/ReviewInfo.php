<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReviewInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReviewInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * suggestion  检测结果是否通过。  取值如下： - block：包含敏感信息，不通过。 - pass：不包含敏感信息，通过。 - review：需要人工复检。  > 当同时检测多个场景时，suggestion的值以最可能包含敏感信息的场景为准。即任一场景出现了block则总的suggestion为block，所有场景都pass时suggestion为pass，这两种情况之外则一定有场景需要review，此时suggestion为review。
    * text  text
    * cover  封面检测结果。
    * video  视频检测结果。
    * execDesc  执行情况描述。
    * reviewStatus  审核状态。  取值如下： - UN_REVIEW：未审核 - REVIEWING：审核中 - REVIEW_SUSPICIOUS：审核可疑，需要人工审核 - REVIEW_PASSED：审核通过 - REVIEW_FAILED：审核失败。 - REVIEW_BLOCKED：已屏蔽。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'suggestion' => 'string',
            'text' => '\HuaweiCloud\SDK\Vod\V1\Model\TextReviewRet',
            'cover' => '\HuaweiCloud\SDK\Vod\V1\Model\PictureReviewRet[]',
            'video' => '\HuaweiCloud\SDK\Vod\V1\Model\PictureReviewRet[]',
            'execDesc' => 'string',
            'reviewStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * suggestion  检测结果是否通过。  取值如下： - block：包含敏感信息，不通过。 - pass：不包含敏感信息，通过。 - review：需要人工复检。  > 当同时检测多个场景时，suggestion的值以最可能包含敏感信息的场景为准。即任一场景出现了block则总的suggestion为block，所有场景都pass时suggestion为pass，这两种情况之外则一定有场景需要review，此时suggestion为review。
    * text  text
    * cover  封面检测结果。
    * video  视频检测结果。
    * execDesc  执行情况描述。
    * reviewStatus  审核状态。  取值如下： - UN_REVIEW：未审核 - REVIEWING：审核中 - REVIEW_SUSPICIOUS：审核可疑，需要人工审核 - REVIEW_PASSED：审核通过 - REVIEW_FAILED：审核失败。 - REVIEW_BLOCKED：已屏蔽。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'suggestion' => null,
        'text' => null,
        'cover' => null,
        'video' => null,
        'execDesc' => null,
        'reviewStatus' => null
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
    * suggestion  检测结果是否通过。  取值如下： - block：包含敏感信息，不通过。 - pass：不包含敏感信息，通过。 - review：需要人工复检。  > 当同时检测多个场景时，suggestion的值以最可能包含敏感信息的场景为准。即任一场景出现了block则总的suggestion为block，所有场景都pass时suggestion为pass，这两种情况之外则一定有场景需要review，此时suggestion为review。
    * text  text
    * cover  封面检测结果。
    * video  视频检测结果。
    * execDesc  执行情况描述。
    * reviewStatus  审核状态。  取值如下： - UN_REVIEW：未审核 - REVIEWING：审核中 - REVIEW_SUSPICIOUS：审核可疑，需要人工审核 - REVIEW_PASSED：审核通过 - REVIEW_FAILED：审核失败。 - REVIEW_BLOCKED：已屏蔽。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'suggestion' => 'suggestion',
            'text' => 'text',
            'cover' => 'cover',
            'video' => 'video',
            'execDesc' => 'exec_desc',
            'reviewStatus' => 'review_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * suggestion  检测结果是否通过。  取值如下： - block：包含敏感信息，不通过。 - pass：不包含敏感信息，通过。 - review：需要人工复检。  > 当同时检测多个场景时，suggestion的值以最可能包含敏感信息的场景为准。即任一场景出现了block则总的suggestion为block，所有场景都pass时suggestion为pass，这两种情况之外则一定有场景需要review，此时suggestion为review。
    * text  text
    * cover  封面检测结果。
    * video  视频检测结果。
    * execDesc  执行情况描述。
    * reviewStatus  审核状态。  取值如下： - UN_REVIEW：未审核 - REVIEWING：审核中 - REVIEW_SUSPICIOUS：审核可疑，需要人工审核 - REVIEW_PASSED：审核通过 - REVIEW_FAILED：审核失败。 - REVIEW_BLOCKED：已屏蔽。
    *
    * @var string[]
    */
    protected static $setters = [
            'suggestion' => 'setSuggestion',
            'text' => 'setText',
            'cover' => 'setCover',
            'video' => 'setVideo',
            'execDesc' => 'setExecDesc',
            'reviewStatus' => 'setReviewStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * suggestion  检测结果是否通过。  取值如下： - block：包含敏感信息，不通过。 - pass：不包含敏感信息，通过。 - review：需要人工复检。  > 当同时检测多个场景时，suggestion的值以最可能包含敏感信息的场景为准。即任一场景出现了block则总的suggestion为block，所有场景都pass时suggestion为pass，这两种情况之外则一定有场景需要review，此时suggestion为review。
    * text  text
    * cover  封面检测结果。
    * video  视频检测结果。
    * execDesc  执行情况描述。
    * reviewStatus  审核状态。  取值如下： - UN_REVIEW：未审核 - REVIEWING：审核中 - REVIEW_SUSPICIOUS：审核可疑，需要人工审核 - REVIEW_PASSED：审核通过 - REVIEW_FAILED：审核失败。 - REVIEW_BLOCKED：已屏蔽。
    *
    * @var string[]
    */
    protected static $getters = [
            'suggestion' => 'getSuggestion',
            'text' => 'getText',
            'cover' => 'getCover',
            'video' => 'getVideo',
            'execDesc' => 'getExecDesc',
            'reviewStatus' => 'getReviewStatus'
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
    const SUGGESTION_BLOCK = 'block';
    const SUGGESTION_PASS = 'pass';
    const SUGGESTION_REVIEW = 'review';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSuggestionAllowableValues()
    {
        return [
            self::SUGGESTION_BLOCK,
            self::SUGGESTION_PASS,
            self::SUGGESTION_REVIEW,
        ];
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
        $this->container['suggestion'] = isset($data['suggestion']) ? $data['suggestion'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['cover'] = isset($data['cover']) ? $data['cover'] : null;
        $this->container['video'] = isset($data['video']) ? $data['video'] : null;
        $this->container['execDesc'] = isset($data['execDesc']) ? $data['execDesc'] : null;
        $this->container['reviewStatus'] = isset($data['reviewStatus']) ? $data['reviewStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSuggestionAllowableValues();
                if (!is_null($this->container['suggestion']) && !in_array($this->container['suggestion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'suggestion', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['reviewStatus'] === null) {
            $invalidProperties[] = "'reviewStatus' can't be null";
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
    * Gets suggestion
    *  检测结果是否通过。  取值如下： - block：包含敏感信息，不通过。 - pass：不包含敏感信息，通过。 - review：需要人工复检。  > 当同时检测多个场景时，suggestion的值以最可能包含敏感信息的场景为准。即任一场景出现了block则总的suggestion为block，所有场景都pass时suggestion为pass，这两种情况之外则一定有场景需要review，此时suggestion为review。
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
    * @param string|null $suggestion 检测结果是否通过。  取值如下： - block：包含敏感信息，不通过。 - pass：不包含敏感信息，通过。 - review：需要人工复检。  > 当同时检测多个场景时，suggestion的值以最可能包含敏感信息的场景为准。即任一场景出现了block则总的suggestion为block，所有场景都pass时suggestion为pass，这两种情况之外则一定有场景需要review，此时suggestion为review。
    *
    * @return $this
    */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;
        return $this;
    }

    /**
    * Gets text
    *  text
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\TextReviewRet|null
    */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
    * Sets text
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\TextReviewRet|null $text text
    *
    * @return $this
    */
    public function setText($text)
    {
        $this->container['text'] = $text;
        return $this;
    }

    /**
    * Gets cover
    *  封面检测结果。
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\PictureReviewRet[]|null
    */
    public function getCover()
    {
        return $this->container['cover'];
    }

    /**
    * Sets cover
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\PictureReviewRet[]|null $cover 封面检测结果。
    *
    * @return $this
    */
    public function setCover($cover)
    {
        $this->container['cover'] = $cover;
        return $this;
    }

    /**
    * Gets video
    *  视频检测结果。
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\PictureReviewRet[]|null
    */
    public function getVideo()
    {
        return $this->container['video'];
    }

    /**
    * Sets video
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\PictureReviewRet[]|null $video 视频检测结果。
    *
    * @return $this
    */
    public function setVideo($video)
    {
        $this->container['video'] = $video;
        return $this;
    }

    /**
    * Gets execDesc
    *  执行情况描述。
    *
    * @return string|null
    */
    public function getExecDesc()
    {
        return $this->container['execDesc'];
    }

    /**
    * Sets execDesc
    *
    * @param string|null $execDesc 执行情况描述。
    *
    * @return $this
    */
    public function setExecDesc($execDesc)
    {
        $this->container['execDesc'] = $execDesc;
        return $this;
    }

    /**
    * Gets reviewStatus
    *  审核状态。  取值如下： - UN_REVIEW：未审核 - REVIEWING：审核中 - REVIEW_SUSPICIOUS：审核可疑，需要人工审核 - REVIEW_PASSED：审核通过 - REVIEW_FAILED：审核失败。 - REVIEW_BLOCKED：已屏蔽。
    *
    * @return string
    */
    public function getReviewStatus()
    {
        return $this->container['reviewStatus'];
    }

    /**
    * Sets reviewStatus
    *
    * @param string $reviewStatus 审核状态。  取值如下： - UN_REVIEW：未审核 - REVIEWING：审核中 - REVIEW_SUSPICIOUS：审核可疑，需要人工审核 - REVIEW_PASSED：审核通过 - REVIEW_FAILED：审核失败。 - REVIEW_BLOCKED：已屏蔽。
    *
    * @return $this
    */
    public function setReviewStatus($reviewStatus)
    {
        $this->container['reviewStatus'] = $reviewStatus;
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

