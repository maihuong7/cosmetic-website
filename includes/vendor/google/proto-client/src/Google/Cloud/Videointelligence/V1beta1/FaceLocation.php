<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1beta1/video_intelligence.proto

namespace Google\Cloud\Videointelligence\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Face location.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1beta1.FaceLocation</code>
 */
class FaceLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * Bounding box in a frame.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.BoundingBox bounding_box = 1;</code>
     */
    private $bounding_box = null;
    /**
     * Video time offset in microseconds.
     *
     * Generated from protobuf field <code>int64 time_offset = 2;</code>
     */
    private $time_offset = 0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Videointelligence\V1Beta1\VideoIntelligence::initOnce();
        parent::__construct();
    }

    /**
     * Bounding box in a frame.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.BoundingBox bounding_box = 1;</code>
     * @return \Google\Cloud\Videointelligence\V1beta1\BoundingBox
     */
    public function getBoundingBox()
    {
        return $this->bounding_box;
    }

    /**
     * Bounding box in a frame.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.BoundingBox bounding_box = 1;</code>
     * @param \Google\Cloud\Videointelligence\V1beta1\BoundingBox $var
     * @return $this
     */
    public function setBoundingBox($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Videointelligence\V1beta1\BoundingBox::class);
        $this->bounding_box = $var;

        return $this;
    }

    /**
     * Video time offset in microseconds.
     *
     * Generated from protobuf field <code>int64 time_offset = 2;</code>
     * @return int|string
     */
    public function getTimeOffset()
    {
        return $this->time_offset;
    }

    /**
     * Video time offset in microseconds.
     *
     * Generated from protobuf field <code>int64 time_offset = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimeOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->time_offset = $var;

        return $this;
    }

}

